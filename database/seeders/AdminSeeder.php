<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = ["role_id"=>"1", "name"=>"Admin", "phone" => "703189693", "email" => "admin@reviewed.ke", "password"=> Hash::make("12345678")];
        
        User::create($superadmin);
    }
}
