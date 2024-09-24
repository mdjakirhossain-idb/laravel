<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    public function run()
    {
        // Check if the admin user already exists
        $admin = User::where('username', 'admin')->first();

        if (!$admin) {
            // Create an admin user if it doesn't exist
            $admin = User::create([
                'username' => 'admin',
                'email' => 'admin@test.com',
                'first_name' => 'Admin',
                'last_name' => 'User',
                'password' => Hash::make('password'), // Securely hash the password
                'id' => Str::uuid(), // Ensure a unique ID is used
            ]);
        } else {
            // Optional: Update the existing admin user if needed
            $admin->update([
                'email' => 'admin@test.com',
                'first_name' => 'Admin',
                'last_name' => 'User',
                'password' => Hash::make('password'), // Securely hash the password
                'id' => Str::uuid(), // Ensure a unique ID is used
            ]);
        }

        // Assign roles if the admin exists
        if ($admin) {
            // Ensure the roles are assigned properly
            $admin->syncRoles(['Admin', 'Super Admin', 'Customer']);
        }
    }
}
