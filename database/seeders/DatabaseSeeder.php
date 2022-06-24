<?php

namespace Database\Seeders;

use App\Models\Bidang_usaha;
use App\Models\Role;
use App\Models\Mitra;
use App\Models\Sektor_usaha;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $bidang = [
            ['nama' => 'Bidang Agraris'],
            ['nama' => 'Bidang Perindustrian'],
            ['nama' => 'Bidang Perdagangan'],
            ['nama' => 'Bidang Jasa'],
            ['nama' => 'Bidang Pertambangan'],
            ['nama' => 'Bidang Pariwisata']
        ];

        $sektor = [
            ['nama' => 'Sektor Pertanian'],
            ['nama' => 'Sektor Industri Barang Konsumsi'],
            ['nama' => 'Sektor Keuangan'],
            ['nama' => 'Sektor Industri Dasar dan Kimia'],
            ['nama' => 'Sektor Infrastruktur, Utilitas, dan Transportasi'],
            ['nama' => 'Sektor Usaha Perdagangan, Jasa dan Investasi'],
            ['nama' => 'Sektor Properti dan Real Estate']
        ];
        $role = [
            ['name' => 'Mitra'],
            ['name' => 'Pencari Kerja']
        ];

        \App\Models\User::factory(4)->create();

        Bidang_usaha::insert($bidang);
        Sektor_usaha::insert($sektor);

        Role::insert($role);
    }
}
