<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Mitra;
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
        \App\Models\User::factory(4)->create();

        Role::create([
            'name' => 'Mitra'
        ]);
        Role::create([
            'name' => 'Pencari Kerja'
        ]);

        Mitra::create(['
        ']);
    }
}
