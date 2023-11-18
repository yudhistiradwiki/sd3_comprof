<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Seeder;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'title' => 'SELAMAT DATANG DI WEBSITE RESMI',
                'subtitle' => 'SD Plus 3 Al-Muhajirin',
                'file' => 'file/carousel/carousel-2.JPG',
            ],
            [
                'title' => 'MOTTO KAMI ADALAH',
                'subtitle' => 'Digital Islamic School',
                'file' => 'file/carousel/carousel-1.JPG',
            ],
        ];

        foreach ($datas as $data) {
            Carousel::create($data);
        }

    }
}
