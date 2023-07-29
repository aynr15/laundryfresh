<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'admin',
                'email'=>'freshadmin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('12341234'),
            ],
            [
                'name'=>'rimbi',
                'email'=>'pinastirimbi@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('12341234'),
            ],
        ];
        foreach($userData as $key => $val){
            User::create ($val);
        }
    }

    
}
