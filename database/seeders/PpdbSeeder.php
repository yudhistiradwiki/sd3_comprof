<?php

namespace Database\Seeders;

use App\Models\Ppdb;
use App\Models\PpdbDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PpdbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ppdb = Ppdb::create([
            'title' => 'PROGRAM UNGGULAN',
            'subtitle' => 'Program Unggulan SD Plus 3 Al-Muhajirin',
            'file' => 'file/whychoose/why.jpg',
        ]);

        $data = [
            [
                'ppdbs_id' => $ppdb->id,
                'title' => 'Class Academy Tahfizh dan Bahasa ',
                'description' => 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet ',
            ],
            [
                'ppdbs_id' => $ppdb->id,
                'title' => 'Tahfizh Camp ',
                'description' => 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet ',
            ],
            [
                'ppdbs_id' => $ppdb->id,
                'title' => 'Digital Classroom ',
                'description' => 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet ',
            ],
            [
                'ppdbs_id' => $ppdb->id,
                'title' => 'Daily Activity Berbasis Pesantren ',
                'description' => 'Erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat ame ',
            ],
            [
                'ppdbs_id' => $ppdb->id,
                'title' => 'Character Building ',
                'description' => 'Erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat ame ',
            ],
            [
                'ppdbs_id' => $ppdb->id,
                'title' => 'Student Exchange ',
                'description' => 'Erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat ame ',
            ],
        ];

        foreach ($data as $serviceData) {
            PpdbDetail::create($serviceData);
        }
    }
}
