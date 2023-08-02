<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        // $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        DB::table('users')->insert([
            [
                'name' => 'Nyala Dinar Abadan',
                'no_telpon' => "085232267925",
                'email' => 'jetex03@gmail.com',
                'role' => 'user',
                'password' => bcrypt('jetex123'),
            ],
            [
                'name' => 'Admin',
                'no_telpon' => "911",
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin123'),
            ],
        ]);
        \App\Models\User::factory(10)->create();
    }
}
