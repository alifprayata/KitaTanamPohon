<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Organization;

class organizationSeeder extends Seeder
{
    public function run()
    {
        organization::create([
            'name' => 'Tanam Pohon Foundation',
            'description' => 'An organization focused on environmental conservation.',
            'location' => 'Jakarta',
            'focus_area' => 'Environment',
            'organization_type' => 'Non-profit',
            'logo_url' => '/img/logo.jpg',
        ]);

        organization::create([
            'name' => 'Hey Jong',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure eaque',
            'location' => 'Bandung',
            'focus_area' => 'Environment',
            'organization_type' => 'Non-profit',
            'logo_url' => '/img/heyjong.png',
        ]);

        organization::create([
            'name' => 'Weduaction',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure eaque',
            'location' => 'Solo',
            'focus_area' => 'Environment',
            'organization_type' => 'Non-profit',
            'logo_url' => '/img/weduaction.png',
        ]);

        organization::create([
            'name' => 'Green Community',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure eaque',
            'location' => 'Kalimantan',
            'focus_area' => 'Environment',
            'organization_type' => 'Non-profit',
            'logo_url' => '/img/green.png',
        ]);

        organization::create([
            'name' => 'Endemic Movement',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure eaque',
            'location' => 'Sulawesi',
            'focus_area' => 'Environment',
            'organization_type' => 'Non-profit',
            'logo_url' => '/img/endemic.png',
        ]);

        organization::create([
            'name' => 'Lembaga Bantuan Hukum',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure eaque',
            'location' => 'Semarang',
            'focus_area' => 'Environment',
            'organization_type' => 'Non-profit',
            'logo_url' => '/img/lbh.png',
        ]);
    }
}

