<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'ucup',
                'email' => 'ucup@gmail.com',
                'role' => 'approver',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'nanang',
                'email' => 'nanang@gmail.com',
                'role' => 'approver',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'maya',
                'email' => 'maya@gmail.com',
                'role' => 'approver',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'rendi',
                'email' => 'rendi@gmail.com',
                'role' => 'driver',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'heru',
                'email' => 'heru@gmail.com',
                'role' => 'driver',
                'password' => Hash::make('password'),
            ]
        ]);


        DB::table('jenis_kendaraans')->insert([
            [
                'name' => 'Angkutan barang',

            ],
            [
                'name' => 'Angkutan orang',

            ],

        ]);

        DB::table('kepemilikans')->insert([
            [
                'name' => 'perusahaan',

            ],
            [
                'name' => 'sewa',

            ],

        ]);



        DB::table('kendaraans')->insert([
            [
                'name' => 'Toyota Avanza',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suzuki Carry',
                'jenis_kendaraan_id' => 2,
                'kepemilikan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mitsubishi L300',
                'jenis_kendaraan_id' => 2,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Honda Jazz',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Daihatsu Terios',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Isuzu Panther',
                'jenis_kendaraan_id' => 2,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ford Ranger',
                'jenis_kendaraan_id' => 2,
                'kepemilikan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Toyota Fortuner',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Honda Brio',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suzuki Ertiga',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Nissan X-Trail',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mazda CX-5',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hyundai Tucson',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chevrolet Colorado',
                'jenis_kendaraan_id' => 2,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Subaru Forester',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kia Seltos',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mitsubishi Pajero',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ford Everest',
                'jenis_kendaraan_id' => 2,
                'kepemilikan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Toyota Hilux',
                'jenis_kendaraan_id' => 2,
                'kepemilikan_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suzuki APV',
                'jenis_kendaraan_id' => 1,
                'kepemilikan_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);


    }
}
