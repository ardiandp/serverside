<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i <=1000; $i++)
        {
        	DB::table('karyawan')->insert([
        	'nik'=>$faker->numberBetween(1000000000000000,5000000000000000),
       		'nama'=> $faker->name,
        	'alamat'=>  $faker->address,
            'telp'=> $faker->phoneNumber(1,2),
        	'agama'=> $faker->name,
       		'jk'=> $faker->numberBetween(1,2),
       		'status'=> $faker->numberBetween(1,2),
       		'tempat_lahir'=> $faker->address,
       		'tanggal_lahir'=> $faker->dateTimeThisCentury()->format('Y-m-d'),
          'foto'=>$faker->image('public/storage/foto_karyawan',640,480, null, false),
          'aktif'=> $faker->numberBetween(0,1),
        	]);      
    }
    }
}
