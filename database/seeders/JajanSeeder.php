<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JajanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jajan')->insert([
             [
                'kode_jajan' => 'SB-1',
                'nama_jajan' => 'Dadar Gulung ',
                'price' => '1000',
                'jenis_id' => 2,
                'description' => 'Dadar gulung merupakan makanan khas Indonesia yang dapat digolongkan sebagai panekuk yang diisi dengan parutan kelapa yang dicampur dengan gula jawa cair',
            ],
            [
                'kode_jajan' => 'SB-2',
                'nama_jajan' => 'Nagasari',
                'price' => '1500',
                'jenis_id' => 2,
                'description' => 'Nagasari atau Nogosari adalah jenis kue basah tradisional yang sangat populer dan diwariskan dari generasi ke generasi dalam masyarakat Jawa.',
            ],
            [
                'kode_jajan' => 'SK-1',
                'nama_jajan' => 'Untir - Untir',
                'price' => '2000',
                'jenis_id' => 1,
                'description' => 'Untir-untir biasa disebut juga dengan kue tambang karena bentuknya yang berulir mirip tambang. Kue ini digoreng dalam minyak kacang dan menghasilkan tekstur renyah garing sehingga cocok menjadi menu camilan manis.',
            ],
        ]);
    }
}
