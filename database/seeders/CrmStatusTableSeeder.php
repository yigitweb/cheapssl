<?php

namespace Database\Seeders;

use App\Models\CrmStatus;
use Illuminate\Database\Seeder;

class CrmStatusTableSeeder extends Seeder
{
    public function run()
    {
        $crmStatuses = [
            [
                'id'         => 1,
                'name'       => 'Lead',
                'created_at' => '2024-11-22 05:55:33',
                'updated_at' => '2024-11-22 05:55:33',
            ],
            [
                'id'         => 2,
                'name'       => 'Customer',
                'created_at' => '2024-11-22 05:55:33',
                'updated_at' => '2024-11-22 05:55:33',
            ],
            [
                'id'         => 3,
                'name'       => 'Partner',
                'created_at' => '2024-11-22 05:55:33',
                'updated_at' => '2024-11-22 05:55:33',
            ],
        ];

        CrmStatus::insert($crmStatuses);
    }
}
