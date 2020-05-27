<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = \Carbon\Carbon::now();

        User::insert([
            [
                "first_name" => "Nana",
                "last_name" => "Aikinson",
                "email" => "nanaaikinson24@gmail.com",
                "password" => Hash::make("12345678"),
                "mask" => generate_mask(),
                "visible" => false,
                "created_at" => $now,
                "updated_at" => $now
            ]
        ]);
    }
}
