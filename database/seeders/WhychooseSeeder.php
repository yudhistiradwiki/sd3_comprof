<?php

namespace Database\Seeders;

use App\Models\Whychoose;
use App\Models\whychooseDetail;
use Illuminate\Database\Seeder;

class WhychooseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $why = Whychoose::create([
            'title' => 'PROGRAM UNGGULAN',
            'subtitle' => 'Program Unggulan SD Plus 3 Al-Muhajirin',
            'file' => 'file/whychoose/why.jpg',
        ]);

        $data = [
            [
                'whychoose_id' => $why->id,
                'title' => 'Class Academy Tahfizh dan Bahasa ',
                'description' => 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet ',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => 'Tahfizh Camp ',
                'description' => 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet ',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => 'Digital Classroom ',
                'description' => 'Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet ',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => 'Daily Activity Berbasis Pesantren ',
                'description' => 'Erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat ame ',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => 'Character Building ',
                'description' => 'Erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat ame ',
            ],
            [
                'whychoose_id' => $why->id,
                'title' => 'Student Exchange ',
                'description' => 'Erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat ame ',
            ],
        ];

        foreach ($data as $serviceData) {
            whychooseDetail::create($serviceData);
        }

    }
}
