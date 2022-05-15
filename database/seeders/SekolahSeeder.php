<?php

namespace Database\Seeders;

use App\Models\Sekolah;
use Illuminate\Database\Seeder;

class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sekolah = app(Sekolah::class); // new Sekolah();
        $sekolah->nama_sekolah = 'Poltekpos Unipos';
        $sekolah->alamat_sekolah = 'Sarijadi';
        $sekolah->save();
    }
}
