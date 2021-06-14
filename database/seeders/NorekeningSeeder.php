<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NorekeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i=1; $i <=1200; $i++)
        {
        	DB::table('norekening')->insert([
        		'atas_nama' => $faker->domainName,
        		'alias' => $faker->domainName,
        		'norek' => $faker->numberBetween(001,200),
        		'bank'  =>$faker->domainName,   		
        	]);
        }
    }
}
