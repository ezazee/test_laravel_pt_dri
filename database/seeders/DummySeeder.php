<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Reza',
            'email' => 'example12@email.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('heros')->insert([
            'title' => '#Aplikasi Pemantau Stok Produk Terbaik',
            'subtitle' => 'Bergabung dengan GAS',
            'deskripsi' => 'Aplikasi GAS akan membantumu dalam memantau stok produk tokomu dan menjangkau customer lebih luas',
            'gambar' => 'Contoh gambar string',
            'link' => 'https://zaportfolio.vercel.app/'
        ]);

        DB::table('tentangs')->insert([
            'title' => 'Kenalan Lebih Lanjut Dengan Kami',
            'deskripsi' => 'Isi Deskripsi pada panel admin',
            'gambar' => 'Contoh gambar string',
        ]);

        DB::table('fiturs')->insert([
            'title' => 'Isi Title Pada Panel Admin',
            'deskripsi' => 'Isi Deskripsi pada panel admin',
            'gambar' => 'Contoh gambar string',
        ]);

        DB::table('kategoris')->insert([
            'title' => 'Isi Title pada Panel Admin',
            'deskripsi' => 'Isi Deskripsi pada panel admin',
            'gambar' => 'Contoh gambar string',
        ]);

        DB::table('maps')->insert([
            'title' => 'Isi Title pada Panel Admin',
            'deskripsi' => 'Isi Deskripsi pada panel admin',
            'gambar1' => 'Contoh gambar string',
            'gambar2' => 'Contoh gambar string',
        ]);

        DB::table('daftokos')->insert([
            'title' => 'Isi Title pada Panel Admin',
            'deskripsi' => 'Isi Deskripsi pada panel admin',
            'gambar' => 'Contoh gambar string',
            'link' => 'https://zaportfolio.vercel.app/'
        ]);
    }
}
