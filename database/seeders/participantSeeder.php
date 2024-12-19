<?php

namespace Database\Seeders;

use App\Models\Activities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Activity;
use App\Models\User;

class participantSeeder extends Seeder
{
    public function run()
    {
        $user = user::where('email', 'user@example.com')->first();
        $activity = activities::first();

        if ($user && $activity) {
            $activity->participants()->attach($user->id);
        }
    }
}
