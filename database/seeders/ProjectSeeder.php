<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Project 2',
                'file' => 'file/project/project-2.JPG',
            ],
            [
                'title' => 'Project 3',
                'file' => 'file/project/project-3.JPG',
            ],
            [
                'title' => 'Project 4',
                'file' => 'file/project/project-4.JPG',
            ],
        ];

        foreach ($data as $project) {
            Project::create($project);
        }

    }
}
