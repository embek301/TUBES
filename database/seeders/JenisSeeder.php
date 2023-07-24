<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis')->insert([
            [
                'code' => 'SB',
                'name' => 'Snacky Basah',
                'description' => 'Snacky Kering adalah jenis jajanan pasar yang bertekstur crunchy dan kering yang cocok dijadikan jajanan dikala nugas kamu <3'
            ],
            [
                'code' => 'SK',
                'name' => 'Snaky Kering',
                'description' => 'Snacky Kering adalah jenis jajanan pasar yang bertekstur basah yang empuk dan lembut yang cocok dijadikan jajanan dikala sore hari sambil ngopimu'
            ],
        ]);
    }
}
