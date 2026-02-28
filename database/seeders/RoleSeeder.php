<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Role;
use Illuminate\Database\Seeder;

final class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            RoleEnum::ADMIN->value,
            RoleEnum::USER->value,
        ];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
