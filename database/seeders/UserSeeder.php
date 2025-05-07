<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Container\Attributes\DB as AttributesDB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                "name"=>"Mario Rossi",
                "email"=> "mario.rossi@example.com",
                "email_verified_at"=> Carbon::now(),
                "password"=> Hash::make('mariorossi123'),
                "remember_token"=> null,
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now(),
            ],
            [
                "name"=>"Giulia Verdi",
                "email"=> "giulia.verdi@example.com",
                "email_verified_at"=> Carbon::now(),
                "password"=> Hash::make('mariorossi123'),
                "remember_token"=> null,
                "created_at"=>Carbon::now(),
                "updated_at"=>Carbon::now(),
            ],
        ]);
    }
}
