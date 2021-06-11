<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProdukSeeder extends Seeder
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
        	DB::table('produk')->insert([
        	'kode_produk'=>$faker->unique()->numberBetween(111,999),
       		'nama_produk'=>$faker->name,
        	'id_kategori'=>$faker->numberBetween(11,99),
            'berat'=>$faker->numberBetween(1,20),
        	'gambar'=>$faker->image('public/storage/foto_produk',640,480, null, false),
       		'keterangan'=>$faker->realText(180),
            'harga' =>$faker->numberBetween(1000,200000),
            'expired' =>$faker->dateTimeThisCentury()->format('Y-m-d'),
            'publish' =>$faker->numberBetween(0,1),            
        	]);      
    }

    }
}
