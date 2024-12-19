<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\homepages;

class homepageSeeder extends Seeder
{
    public function run()
    {
        homepages::create([
            'section_name' => 'banner',
            'content' => json_encode([
                'title' => 'Welcome to TanamPohon.id',
                'subtitle' => 'Take part in activities for social good.',
                'cta_text' => 'Join Us',
                'cta_url' => '/aktifitas'
            ])
        ]);
    }
}
