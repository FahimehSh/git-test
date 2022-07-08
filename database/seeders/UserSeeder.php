<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'fahimeh',
                'email' => 'shirdel@gmail',
                'password' => '123456',
            ],
            [
                'name' => 'sara',
                'email' => 'sara@gmail',
                'password' => '123456',
            ],
            [
                'name' => 'taha',
                'email' => 'taha@gmail',
                'password' => '123456',
            ],
            [
                'name' => 'ashkan',
                'email' => 'ashkan@gmail',
                'password' => '123456',
            ],
            [
                'name' => 'zahra',
                'email' => 'zahra@gmail',
                'password' => '123456',
            ]
        ]);
    }
}
