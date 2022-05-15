<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i <= 2; $i++) {
            Siswa::create([
                'NISN' => rand(111111, 999999),
                'nama_siswa' => $faker->name(),
                'jenis_kelamin' => $i == 0 ? 'M' : 'F',
                'alamat' => $faker->address(),
                'sekolah_id' => 1
            ]);
        }
    }
}
