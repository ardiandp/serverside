<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BcaakhdanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i <=12; $i++)
        {
        	DB::table('bcaakhdan')->insert([
        	'tanggal'=> $faker->dateTimeThisCentury()->format('Y-m-d'),
       		'keterangan'=> $faker->name,
        	'cabang'=>  $faker->address,
            'status'=> $faker->numberBetween(1,2),
        	'jumlah'=> $faker->numberBetween(100000,15000000),
       		'saldo'=> $faker->numberBetween(100000,15000000),
        	]);      
    }
    }
}
