<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Queue>
 */
class QueueFactory extends Factory
{
    public function definition(): array
    {
        return [
            'company_id'         => Company::factory(),
            'name'               => fake()->randomElement(['fila 1', 'fila 2', 'fila 3']),
            'description'        => fake()->sentence(),
            'service_name'       => fake()->sentence(),
            'service_desk'       => fake()->sentence(),
            'queue_prefix'       => fake()->sentence(),
            'queue_total_digits' => fake()->randomDigit(),
            'queue_colors',
            'hash_code',
        ];
    }
}
