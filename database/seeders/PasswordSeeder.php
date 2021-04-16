<?php

namespace Database\Seeders;
use App\Models\Password;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PasswordSeeder extends Seeder
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
        	DB::table('password')->insert([
        		'url' => $faker->domainName,
        		'username' => $faker->firstName,
        		'password' => "password"
        	]);






        /*$password = new Password;
        $password->url = "http://instagram.com";
        $password->username ="dianmustikaspa";
        $password->password ="dasnaindah";
        $password->save(); */
    }
      }
}
