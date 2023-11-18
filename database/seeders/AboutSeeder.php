<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'Digital Islamic School',
            'description' => 'SD Plus 3 Al-Muhajirin adalah salah satu dari sekian banyak Lembaga Pendidikan di kabupaten purwakarta yang berada di garda depan untuk mempersiapkan setiap genarasi bangsa yang memiliki wawasan global, kompetitif dan berakhlak mulia. menjadikan generasi bangsa ini menjadi para penghapal al-Qur`an dan berbahasa asing yang berkompeten.',
            'file' => 'file/about/service-2.jpg',
        ]);
    }
}
