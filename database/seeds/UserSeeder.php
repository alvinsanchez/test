<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
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
                'name' => 'Alvin Sanchez',
                'email' => 'sanchezalvin14@gmail.com',
                'password' => Hash::make('a'),
            ],
            [
                'name' => 'Michelle Sanchez',
                'email' => 'michan@gmail.com',
                'password' => Hash::make('a'),
            ],
            [
                'name' => 'JB Sanchez',
                'email' => 'jb@gmail.com',
                'password' => Hash::make('a'),
            ],
        ];

        foreach($data as $val){
            User::create($val);
        }
    }
}
