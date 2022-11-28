<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [ 
                [
                    'name' => 'Admin',
                    'email' =>  'admin@gmail.com',
                    'password'=> Hash::make('admin@12345'),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ];

        foreach ($admins as $admin) {
                DB::table('admins')->insert($admin);
        }

    }
}
