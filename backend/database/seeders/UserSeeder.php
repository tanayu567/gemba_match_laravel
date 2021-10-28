<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $init_users = [
            [
                'name' => '島田紳助',
                'email' => 'shinsuke@example.com',
                'password' => Hash::make('tanayu567'),
                'founding_year' => '5',
                'area' => '大阪',
                'license' => '１級建築士'
            ],

            [
                'name' => '山田哲人',
                'email' => 'test@gmail.com',
                'password' => Hash::make('tanayu567'),
                'founding_year' => '10',
                'area' => '東京',
                'license' => '１級建築士'
            ],

            [
                'name' => '柳田悠岐',
                'email' => 'test1@example.com',
                'password' => Hash::make('tanayu567'),
                'founding_year' => '20',
                'area' => '福岡',
                'license' => '１級建築士'
            ]
        ];

        foreach($init_users as $init_user) {
            $user = new User();
            $user->name = $init_user['name'];
            $user->email = $init_user['email'];
            $user->password = $init_user['password'];
            $user->founding_year = $init_user['founding_year'];
            $user->area = $init_user['area'];
            $user->license = $init_user['license'];
            $user->save();
        }
    }
}
