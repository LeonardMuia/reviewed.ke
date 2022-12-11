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
        $superadmin = ["role_id"=>"1", "name"=>"Super Admin", "phone_number" => "703189693", "email" => "super.admin@reviewed.ke", "password"=> Hash::make("Terry@2001")];
        
        User::create($superadmin);
    }
}
