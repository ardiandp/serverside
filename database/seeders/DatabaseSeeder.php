<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
        PasswordSeeder::class,
        BcacvSeeder::class,
        BcaardianSeeder::class,
        BcaakhdanSeeder::class,
        ProdukSeeder::class,
        KategoriSeeder::class,
        KdbankSeeder::class,
        KaryawanSeeder::class,
        NorekeningSeeder::class,
        ]);
    }
}
