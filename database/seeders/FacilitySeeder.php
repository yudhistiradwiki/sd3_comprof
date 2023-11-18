<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Fasilitas 1',
                'file' => 'file/project/project-1.JPG',
            ],
            [
                'title' => 'Fasilitas 2',
                'file' => 'file/project/project-2.JPG',
            ],
            [
                'title' => 'Fasilitas 3',
                'file' => 'file/project/project-3.JPG',
            ],
            [
                'title' => 'Fasilitas 4',
                'file' => 'file/project/project-4.JPG',
            ],
            [
                'title' => 'Fasilitas 5',
                'file' => 'file/project/project-5.JPG',
            ],
            [
                'title' => 'Fasilitas 6',
                'file' => 'file/project/project-6.JPG',
            ],
            [
                'title' => 'Fasilitas 7',
                'file' => 'file/project/project-3.JPG',
            ],
            [
                'title' => 'Fasilitas 8',
                'file' => 'file/project/project-4.JPG',
            ],
            [
                'title' => 'Fasilitas 9',
                'file' => 'file/project/project-5.JPG',
            ],
            [
                'title' => 'Fasilitas 10',
                'file' => 'file/project/project-6.JPG',
            ],
        ];

        foreach ($data as $project) {
            Facility::create($project);
        }
    }
}
