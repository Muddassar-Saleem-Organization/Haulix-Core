<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::query()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('Admin'),
            'email_verified_at' => now(),
        ]);

        $admin->assignRole(RoleEnum::ADMIN->value);

        $user = User::query()->create([
            'name' => 'Member',
            'email' => 'member@example.com',
            'password' => Hash::make('Member'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole(RoleEnum::USER->value);
    }
}
