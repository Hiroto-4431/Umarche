<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('owners')->insert([
            [
                'name' => '岡田康太',
                'email' => 'test1@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/10/01 10:00:00',
            ],
            [
                'name' => '髙比良くるま',
                'email' => 'test2@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/10/01 12:00:00',
            ],
            [
                'name' => '杉本青空',
                'email' => 'test3@test.com',
                'password' => Hash::make('test1234'),
                'created_at' => '2022/10/01 14:00:00',
            ],
        ]);
    }
}
