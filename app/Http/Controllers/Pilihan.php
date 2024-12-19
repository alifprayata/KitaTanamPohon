<?php
namespace App\Http\Controllers;

use App\Models\activities;
use Illuminate\Http\Request;

class Pilihan extends Controller
{
    public function show($id)
    {
        // Fetch the activity by its ID or fail with a 404 error
        $activity = activities::findOrFail($id);

        // Pass the activity data to the view
        return view('aktivitas.aktivitas', [
            'title' => $activity->title,
            'activity' => $activity,
        ]);
    }

    public function index(Request $request)
    {
        // Retrieve the search query
        $search = $request->input('search');

        // Query the activities based on the search input
        $activities = activities::when($search, function ($query, $search) {
            return $query->where('title', 'like', "%{$search}%")
                         ->orWhere('description', 'like', "%{$search}%")
                         ->orWhere('location', 'like', "%{$search}%");
        })->paginate(8);

        // Pass the search query back to the view
        return view('aktivitas.pilihan', [
            'title' => 'Pilihan',
            'activities' => $activities,
            'search' => $search,
        ]);
    }
}
