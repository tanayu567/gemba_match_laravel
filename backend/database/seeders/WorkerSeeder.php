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
        $init_workers = [
            [
                'name' => '明石家さんま',
                'email' => 'sanma@example.com',
                'password' => Hash::make('tanayu567'),
                'experience_year' => '10',
                'area' => '東京',
                'license' => '１級電気工事士'
            ],
        
            [
                'name' => '田中雄太',
                'email' => 'test@gmail.com',
                'password' => Hash::make('tanayu567'),
                'experience_year' => '10',
                'area' => '東京',
                'license' => '１級電気工事士'
            ],
        
            [
                'name' => '田中剛史',
                'email' => 'test1@gmail.com',
                'password' => Hash::make('tanayu567'),
                'experience_year' => '10',
                'area' => '東京',
                'license' => '１級電気工事士'
            ],
        
        ];

        foreach($init_workers as $init_worker) {
            $worker = new Worker();
            $worker->name = $init_worker['name'];
            $worker->email = $init_worker['email'];
            $worker->password = $init_worker['password'];
            $worker->experience_year = $init_worker['experience_year'];
            $worker->area = $init_worker['area'];
            $worker->license = $init_worker['license'];
            $worker->save();
        }
    }
}
