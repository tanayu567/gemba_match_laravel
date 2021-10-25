<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'name' => '島田紳助',
            'email' => 'shinsuke@example.com',
            'password' => Hash::make('secret'),
            'founding_year' => '5',
            'area' => '大阪',
            'license' => '１級建築士'
        ]);
    }
}
