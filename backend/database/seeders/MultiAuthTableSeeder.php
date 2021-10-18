<?php

namespace Database\Seeders;

use App\Models\Worker;
use App\Models\Company;
use Illuminate\Database\Seeder;

class MultiAuthTableSeeder extends Seeder
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
                'password' => 'secret',
                'experience_year' => '10',
                'erea' => '東京',
                'license' => '１級電気工事士'
            ],

            // ここに追加できます
        ];

        foreach($init_workers as $init_worker) {
            $worker = new Worker();
            $worker->name = $init_worker['name'];
            $worker->email = $init_worker['email'];
            $worker->password = $init_worker['password'];
            $worker->experience_year = $init_worker['experience_year'];
            $worker->erea = $init_worker['erea'];
            $worker->license = $init_worker['license'];
            $worker->save();
        }

        $init_companies = [
            [
                'name' => '島田紳助',
                'email' => 'shinsuke@example.com',
                'password' => 'secret',
                'founding_year' => '5',
                'erea' => '大阪',
                'license' => '１級建築士'
            ]
        ];

        foreach($init_companies as $init_company) {
            $company = new Company();
            $company->name = $init_company['name'];
            $company->email = $init_company['email'];
            $company->password = $init_company['password'];
            $company->founding_year = $init_company['founding_year'];
            $company->erea = $init_company['erea'];
            $company->license = $init_company['license'];
            $company->save();
        }
    }
}
