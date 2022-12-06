<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ["name" => "Administrator","description" => "System Super Admin"],
            ["name" => "Support","description" => "Support Team Member"],
        ];
        
        foreach($roles as $role) {
            Role::create($role);
        }
    }
}
