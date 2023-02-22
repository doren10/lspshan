<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         //Input Data Kategori
         Kategori::create(
            [
                'ket_kategori' => 'Kebersihan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Keamanan'
            ]
        );
        Kategori::create(
            [
                'ket_kategori' => 'Kesehatan'
            ]
        );
        //Input Data Siswa
        Siswa::create([
            'id' => '1103095804960418',
            'nama' => 'Michelle Unjani Riyanti S.Sos',
            'kelas' => 'XII TEL 7',
        ]);
        Siswa::create([
            'id' => '1209762804061170',
            'nama' => 'Zizi Patricia Safitri',
            'kelas' => 'XII TEL 8',
        ]);
        Siswa::create([
            'id' => '1506926508141921',
            'nama' => 'Ibrani Saptono',
            'kelas' => 'XII TEL 9',
        ]);
        //Input Data Aspirasi
          Aspirasi::create([
            'id' => 1,
            'id_aspirasi' => 1,
            'kategori_id' => 2,
            'status' => 'Menunggu',
        ]);
        Aspirasi::create([
            'id' => 2,
            'id_aspirasi' => 2,
            'kategori_id' => 3,
            'status' => 'Menunggu',
        ]);
        //Input Aspirasi
        Input_aspirasi::create([
            'nis' => '1506926508141921',
            'kategori_id' => '2',
            'lokasi' => 'SMK TELKOM',
            'ket' => 'kehilangan motor',
        ]);
        Input_aspirasi::create([
            'nis' => '1506926508141921',
            'kategori_id' => '3',
            'lokasi' => 'Kalideres',
            'ket' => 'Kali kotor',
        ]);
        //input data admin
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('password'),
        ]);
    }
}
