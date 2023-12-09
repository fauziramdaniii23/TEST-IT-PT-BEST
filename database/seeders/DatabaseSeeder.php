<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\datapegawai;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        datapegawai::create([
            'pegawai_nama' => 'fauziramdani',
            'tempat_lahir' => 'Bandung',
            'tgl_lahir' => Carbon::parse('22-12-1998'),
            'pegawai_umur' => '25',
            'pegawai_alamat' => 'Tanjungsari, kab.sumedang',
            'no_telepon' => '085659761805',
            'foto' => 'foto.jpg',
            'jenis_kelamin' => 'laki-laki',
            'agama' => 'islam',
            'hobi' => 'bermain bola',
        ]);
    }
}
