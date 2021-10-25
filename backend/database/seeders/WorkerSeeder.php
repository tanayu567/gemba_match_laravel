<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Worker::create([
            'name' => '明石家さんま',
            'email' => 'sanma@example.com',
            'password' => Hash::make('secret'),
            'experience_year' => '10',
            'erea' => '東京',
            'license' => '１級電気工事士'
        ]);
    }
}
