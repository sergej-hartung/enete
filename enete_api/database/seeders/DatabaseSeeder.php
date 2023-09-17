<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Rolle für Admin
        if(!Role::where('name', 'admin')->exists()){
            Role::create(['name' => 'admin', 'guard_name' => 'api']);
        }
        //Rolle für Partner
        if(!Role::where('name', 'partner')->exists()){
            Role::create(['name' => 'partner', 'guard_name' => 'api']);
        }
        //Rolle für Kunde
        if(!Role::where('name', 'client')->exists()){
            Role::create(['name' => 'client', 'guard_name' => 'api']);
        }
        if(!Role::where('name', 'user')->exists()){
            Role::create(['name' => 'user', 'guard_name' => 'api']);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
