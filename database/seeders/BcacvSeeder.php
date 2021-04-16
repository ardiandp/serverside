<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class BcacvSeeder extends Seeder
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
        	DB::table('bca_cv')->insert([
        		'tanggal' => $faker->domainName,
        		'keterangan' => $faker->firstName,
        		'cabang' => "password",
        		'jumlah'
        		'status'
        		'saldo'
        	]);      
    }
    }
}
