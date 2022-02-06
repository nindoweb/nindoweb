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
                'name' => 'Web Development',
                'image' => 'not found',
                'code' => uniqid(),
                'content' => ''
            ],
            [
                'id' => 2,
                'name' => 'Mobile App Development',
                'image' => 'not found',
                'code' => uniqid(),
                'content' => ''
            ],
            [
                'id' => 3,
                'name' => 'Ux/Ui Design',
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
