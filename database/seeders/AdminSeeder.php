<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Admin::updateOrCreate(['email'=>'alikazmi@gmail.com'],[
            'name' => 'Admin User',
            'password' => Hash::make('password')
         ]);
         Admin::updateOrCreate(['email'=>'bashar@gmail.com'],[
            'name' => 'Admin User',
            'password' => Hash::make('bashar1214')
         ]);
         
    }
    
    
    
}