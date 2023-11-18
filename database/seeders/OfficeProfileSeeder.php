<?php

namespace Database\Seeders;

use App\Models\OfficeProfile;
use Illuminate\Database\Seeder;

class OfficeProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OfficeProfile::create([
            'name' => 'SD Plus 3 Al-Muhajirin ',
            'email' => 'sdp3almuhajirin@gmail.com',
            'telepon' => '+6287723487776',
            'alamat' => 'Jalan Ipik Gandamanah No. 33 Ciseureuh Purwakarta, Jawa Barat, 41118',
            'whatsapp' => null,
            'instagram' => null,
            'facebook' => null,
            'linkedin' => null,
            'youtube' => null,
            'maps' => 'https://maps.app.goo.gl/Ma9ahrd9BRuz6jqF7',
            'logo' => 'file/profilePT/logo.png',
            'about' => 'SD Plus 3 Al-Muhajirin mempunyai visi terwujudnya peserta didik yang berwawasan global, kompetitif, dan berakhlak mulia.',
            'pengalaman' => '0',
            'anggota' => '0',
            'penilaian' => '0',
            'proyek' => '0',
        ]);
    }
}
