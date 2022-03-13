<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Web',
                'sub_name' => 'Development',
                'image' => 'not found',
                'code' => uniqid(),
                'content' => ''
            ],
            [
                'id' => 2,
                'name' => 'Mobile App',
                'sub_name' => 'Development',
                'image' => 'not found',
                'code' => uniqid(),
                'content' => ''
            ],
            [
                'id' => 3,
                'name' => 'Ux/Ui',
                'sub_name' => 'Design',
                'image' => 'not found',
                'code' => uniqid(),
                'content' => ''
            ]
        ];

        foreach ($data as $item) {
            Service::query()->firstOrCreate([
                'name' => $item['name']
            ], $item);
        }
    }
}
