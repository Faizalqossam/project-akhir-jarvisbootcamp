<?php

namespace Database\Seeders;

use App\Models\Bidang_usaha;
use App\Models\Keahlian;
use App\Models\Lowongan;
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
            ['nama' => 'Web Developer'],
            ['nama' => 'Marketing Communication'],
            ['nama' => 'Designer Grafis'],
            ['nama' => 'Business Development'],
            ['nama' => 'Project Manager'],
            ['nama' => 'HR Manager'],
            ['nama' => 'Sales Promotion Superviser'],
            ['nama' => 'English Teacher']
        ];

        $keahlian = [
            ['nama' => 'Programming'],
            ['nama' => 'Marketing'],
            ['nama' => 'Design'],
            ['nama' => 'Business'],
            ['nama' => 'Management'],
            ['nama' => 'Teaching'],
            ['nama' => 'Sales'],
            ['nama' => 'Communication']
        ];

        $sektor = [
            ['nama' => 'Software Engineer'],
            ['nama' => 'Marketing'],
            ['nama' => 'Design & Creative'],
            ['nama' => 'Business Development'],
            ['nama' => 'Project Management'],
            ['nama' => 'Human Resource'],
            ['nama' => 'Sales & Communication'],
            ['nama' => 'Teaching & Education']
        ];
        $role = [
            ['name' => 'Mitra'],
            ['name' => 'Pencari Kerja']
        ];

        $mitra = [
            [
                'nama' => 'Tokopedia',
                'alamat' => 'Jakarta',
                'kontak' => 'hr',
                'telepon' => '021 5017 0809',
                'email' => 'karir@tokopedia.com',
                'web' => 'tokopedia.com',
                'bidang_usahas_id' => '1',
                'sektor_usahas_id' => '1'
            ],
            [
                'nama' => 'Kompas Gramedia',
                'alamat' => 'Jakarta',
                'kontak' => 'hr',
                'telepon' => '021 2933 1222',
                'email' => 'hr@kompas.com',
                'web' => 'kompasgramedia.com',
                'bidang_usahas_id' => '2',
                'sektor_usahas_id' => '2'
            ],
            [
                'nama' => 'Artmhospere Design',
                'alamat' => 'Tangerang',
                'kontak' => 'hr',
                'telepon' => '0882 21026 8812',
                'email' => 'info@artmosphere-design.com',
                'web' => 'https://www.artmosphere-design.com',
                'bidang_usahas_id' => '3',
                'sektor_usahas_id' => '3'
            ],
            [
                'nama' => 'Elabram System',
                'alamat' => 'Jakarta',
                'kontak' => 'hr',
                'telepon' => '021 5033 8688',
                'email' => 'info@elabram.com',
                'web' => 'https://elabram.com',
                'bidang_usahas_id' => '4',
                'sektor_usahas_id' => '4'
            ],
            [

                "nama" => "Carbonate",
                "alamat" => "Singapura",
                "kontak" => "hr",
                "telepon" => "65 6331 2222",
                "email" => "info@caarbonate.com",
                "web" => "https://www.carbonateapp.com/",
                "bidang_usahas_id" => "5",
                "sektor_usahas_id" => "5"
            ],
            [

                "nama" => "Quipper",
                "alamat" => "Jakarta",
                "kontak" => "hr",
                "telepon" => "0881 9790 5700",
                "email" => "info-id@quipper.com",
                "web" => "https://www.quipper.com/id/",
                "bidang_usahas_id" => "6",
                "sektor_usahas_id" => "6"
            ],
            [

                "nama" => "Gojek",
                "alamat" => "Jakarta",
                "kontak" => "hr",
                "telepon" => "0221 5084 9000",
                "email" => "info@gojek.com",
                "web" => "https://www.gojek.com/id-id/",
                "bidang_usahas_id" => "7",
                "sektor_usahas_id" => "7"
            ],
            [

                "nama" => "Saint Nicolas School",
                "alamat" => "Jakarta",
                "kontak" => "hr",
                "telepon" => "021 5596 5750",
                "email" => "info@saint.com",
                "web" => "http://st-nicholas.sch.id/",
                "bidang_usahas_id" => "8",
                "sektor_usahas_id" => "8"
            ]
        ];

        $lowongan = [
            [
                'mitras_id' => '1',
                'judul_lowongan' => 'Backend Developer',
                'email' => 'hr@tokopedia.com',
                'tanggal_akhir' => '2022-09-30',
                'deskripsi_pekerjaan' => 'Melakukan penggunaaan teknologi stack dengan ReactJS Microservices dengan Springboot serta PostgresSQL DBMengembangkan aplikasi backend menggunakan Java Spring Boot 2.5 or latest'
            ],
            [
                'mitras_id' => '2',
                'judul_lowongan' => 'Marketing Communication',
                'email' => 'hr@kompasgramedia.com',
                'tanggal_akhir' => '2022-12-24',
                'deskripsi_pekerjaan' => '"Meningkatkan Brand Awareness produk Kompas TV melalui kerja sama dengan pihak internal dan eksternal. Mengelola perencanaan dan kerja sama barter pada media luar ruang. Melakukan kerja sama promo barter dan semi barter produk untuk mendukung kebutuhan Kompas TV"'
            ],
            [
                'mitras_id' => '3',
                'judul_lowongan' => 'Brand & Graphic Designer',
                'email' => 'info@artmosphere-design.com',
                'tanggal_akhir' => '2022-10-30',
                'deskripsi_pekerjaan' => 'Membuat dan mendesain berbagai material untuk agunan cetak dan digital. Pastikan proyek diselesaikan dengan kualitas tinggi dan sesuai jadwal. Mengkonseptualisasikan dan mengembangkan konsep desain, grafik, dan tata letak'
            ]
        ];

        \App\Models\User::factory(4)->create();

        Keahlian::insert($keahlian);
        Mitra::insert($mitra);

        Bidang_usaha::insert($bidang);
        Sektor_usaha::insert($sektor);
        Lowongan::insert($lowongan);

        Role::insert($role);
    }
}
