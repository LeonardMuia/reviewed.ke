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
        $superadmin = ["role_id"=>"100", "name"=>"Super Admin", "email" => "admin@reviewed.ke", "password"=> Hash::make("!VuQrnUapCf4@M23")];
        
        User::create($superadmin);
    }
}
