<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Jemputan',
                'description' => 'Kami persilahkan untuk mengisi form terlebih dahulu bagi orang tua yang membutuhkan layanan sekolah.',
                'file' => 'file/services/service-1.JPG',
                'link' => 'https://forms.gle/qab9Sn3sgUQTfC5a9'
            ],
            [
                'title' => 'Snack',
                'description' => 'Kami persilahkan untuk mengisi form terlebih dahulu bagi orang tua yang membutuhkan layanan sekolah.',
                'file' => 'file/services/service-2.JPG',
                'link' => 'https://forms.gle/LGjrhFsRmQrkm7iJA'
            ],
            [
                'title' => 'Makan Siang',
                'description' => 'Kami persilahkan untuk mengisi form terlebih dahulu bagi orang tua yang membutuhkan layanan sekolah.',
                'file' => 'file/services/service-3.JPG',
                'link' => 'https://forms.gle/upjK9DvXqULXTdb88'
            ],
            [
                'title' => 'Ekstrakurikuler',
                'description' => 'Kami persilahkan untuk mengisi form terlebih dahulu bagi orang tua yang membutuhkan layanan sekolah.',
                'file' => 'file/services/service-4.JPG',
                'link' => 'https://forms.gle/jQ8bvUoFbUQekqNTA'
            ],
        ];

        foreach ($data as $serviceData) {
            Services::create($serviceData);
        }

    }
}
