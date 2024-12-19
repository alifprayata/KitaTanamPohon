<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activities; // Pastikan ini sesuai dengan nama model Anda

class ActivitySeeder extends Seeder
{
    public function run()
    {
        // Data kegiatan awal
        $activities = [
            [
                'title' => 'Penanaman 1000 Pohon di Jakarta',
                'description' => 'Aksi nyata menanam 1000 pohon untuk udara bersih.',
                'date' => '2024-07-10',
                'location' => 'Jakarta',
                'organization_id' => 1,
                'category' => 'Lingkungan',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Hari Menanam Nasional 2024',
                'description' => 'Kampanye nasional untuk menanam pohon di seluruh Indonesia.',
                'date' => '2024-11-28',
                'location' => 'Bandung',
                'organization_id' => 1,
                'category' => 'Lingkungan',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Bersih Hutan dan Penanaman Bibit',
                'description' => 'Bersih-bersih hutan dan penanaman bibit pohon.',
                'date' => '2024-09-15',
                'location' => 'Malang',
                'organization_id' => 2,
                'category' => 'Konservasi',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Penanaman Mangrove di Pesisir',
                'description' => 'Restorasi mangrove untuk melindungi pantai.',
                'date' => '2024-08-20',
                'location' => 'Surabaya',
                'organization_id' => 3,
                'category' => 'Lingkungan',
                'status' => 'upcoming',
            ],
            [
                'title' => 'Kegiatan Tanam Pohon Bersama Komunitas',
                'description' => 'Ajak komunitas menanam pohon.',
                'date' => '2024-10-12',
                'location' => 'Bogor',
                'organization_id' => 4,
                'category' => 'Sosial',
                'status' => 'upcoming',
            ],
        ];

        // Duplikasi data menjadi 20
        for ($i = 0; $i < 4; $i++) {
            foreach ($activities as $activity) {
                Activities::create($activity);
            }
        }
    }
}
