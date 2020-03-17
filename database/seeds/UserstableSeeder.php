<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        User::truncate();
        // CREA LOS DOS USUARIOS ADMINISTRADORES
        User::insert([
            [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('Admin_00123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ],
            [
            'name' => 'Jose luis Martinez',
            'email' => 'pepe@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('Joseluis_00'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]
        ]);
    }
}
