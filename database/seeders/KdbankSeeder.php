<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KdbankSeeder extends Seeder
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
        	DB::table('kdbank')->insert([
        		'nama_bank' => $faker->domainName,
        		'kode' => $faker->numberBetween(001,200)     		
        	]);
        }
    }
}
