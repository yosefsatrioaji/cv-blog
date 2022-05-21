<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $yosef = User::create([
            'name' => 'Yosef',
            'email' => 'yosef260501@gmail.com',
            'password' => bcrypt('IniPasswordYa123!')
        ]);

        $yosef->assignRole('admin');

        $visitor = User::create([
            'name' => 'Visitor',
            'email' => 'visitor@yosefsa.xyz',
            'password' => bcrypt('IniPasswordYa123!')
        ]);

        $visitor->assignRole('visitor');

        $client = User::create([
            'name' => 'Client',
            'email' => 'client@yosefsa.xyz',
            'password' => bcrypt('IniPasswordYa123!')
        ]);

        $client->assignRole('client');
    }
}
