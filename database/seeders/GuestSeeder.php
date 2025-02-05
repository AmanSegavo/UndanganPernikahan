<?php

use App\Models\Guest;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Guest::create([
            'name' => 'Abdurrahman Assegaf',
            'email' => 'rahmanassegaf68@gmail.com',
            'phone' => '088211842247',
            'address' => 'Griya Sako Permai, Blok G13, kec.Sako, Kel.Sako Baru, Kota Palembang',
        ]);

        Guest::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '0987654321',
            'address' => '456 Elm St, City, Country',
        ]);

        // Tambahkan data dummy lainnya sesuai kebutuhan
    }
}
