<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Factory;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userstable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
User::create([
    'name'=>'wail',
    'email'=>'rihanewa@gmail.com',
    'role'=>'1',

    'password'=>bcrypt('11111111'),

]);
User::create([
    'name'=>'isam',
    'email'=>'rihanewail@gmail.com',
    'role'=>'0',

    'password'=>bcrypt('11111111'),

]);
$faker=FakerFactory::create();
for ($i=0; $i <15 ; $i++) {
    User::create([
        'name'=>$faker->sentence(4) ,
        'email'=>$i.'@gmail.com',
        'role'=>'0',

        'password'=>bcrypt('11111111'),

    ]);
}
}
}
