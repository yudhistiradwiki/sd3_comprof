<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Sambutan;
use Illuminate\Database\Seeder;

class SambutanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_kepsek' => 'Wahyudin',
                'sambutan' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod doloribus numquam, veritatis illo natus reiciendis voluptatum, hic explicabo pariatur labore inventore voluptate! Alias doloribus qui veniam praesentium quasi dignissimos id impedit fugit adipisci debitis in aspernatur modi, totam, doloremque quod maxime laudantium beatae neque. Suscipit, ea? Ut consequuntur repudiandae quisquam nemo ex repellendus doloribus adipisci recusandae iure officiis praesentium maxime quos numquam provident quidem quas, nam pariatur officia aperiam esse nisi ad commodi quia? Sint voluptatibus vitae placeat sit tempora, minima quasi natus cupiditate dicta, quas ab, laborum porro voluptas culpa officiis fugit minus harum iste iusto incidunt ad repudiandae?',
                'file' => 'file/project/project-2.JPG',
            ],
        ];

        foreach ($data as $project) {
            Sambutan::create($project);
        }

    }
}
