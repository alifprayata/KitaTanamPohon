<?php
namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    // Display all organizations
    public function index(Request $request)
    {
        $organizations = Organization::paginate(5); // Paginate for better UX
        $title = 'Daftar Organisasi';
        return view('organisasi', compact('organizations', 'title'));
    }

    // Handle the search functionality
    public function handleSearch(Request $request)
    {
        $search = $request->input('keyword');
        $organizations = Organization::where('name', 'LIKE', '%' . $search . '%')
            ->paginate(3)->withQueryString();
        $title = 'Cari Organisasi';
        return view('organisasi', compact('organizations', 'title', 'search'));
    }
        public function show($id)
    {
        $organization = Organization::findOrFail($id);

        return view('aktivitas.detail', [
            'organization' => $organization,
            'title' => $organization->name,
        ]);
    }
}
