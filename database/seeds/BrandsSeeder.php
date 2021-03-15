<?php

use Illuminate\Database\Seeder;
use Domain\Brands\Models\Brand;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Coca Cola',
                'status' => 1,
                'active' => 1
            ],
            [
                'name' => 'Royal Crown',
                'status' => 1,
                'active' => 1
            ],
            [
                'name' => 'San Miguel Brewery',
                'status' => 1,
                'active' => 1
            ],
            [
                'name' => 'Pepsi',
                'status' => 1,
                'active' => 1
            ],
            [
                'name' => 'Asia Brewery',
                'status' => 1,
                'active' => 1
            ],
        ];

        foreach($data as $d){
            Brand::create($d);
        }
    }
}
