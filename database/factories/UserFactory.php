<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name'            => fake()->company(),
            'company_id'      => Company::factory(),
            'email'           => fake()->companyEmail(),
            'password'        => '123456789',
            'role'            => fake()->randomElement(['sys_admin', 'client_admin', 'client_user']),
            'last_login'      => fake()->dateTime(),
            'code'            => fake()->uuid(),
            'code_expiration' => fake()->dateTime(),
            'active'          => fake()->boolean(),
            'blocked_until'   => fake()->dateTime(),
        ];
    }
}
