<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * kemudian seeder yang disebutkan tadi akan dipanggil pada database seeder melalui this call... 
     */
    public function run(): void
    {
        $this->call([
            JenisSeeder::class,
            JajanSeeder::class,
            UserSeeder::class
        ]);
    }
}