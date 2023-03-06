<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Investor>
 */
class InvestorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $investment = ['Bonds', 'Crypto', 'Property', 'Commodities', 'Mutual Funds', 'Stocks', 'Cash'];
        $money = ['Philippine Money', 'US Dollar', 'British Pounds', 'Japanese Yen'];
        return [
            'name'          =>fake()->name,
            'address'       =>fake()->address,
            'email'         =>fake()->unique()->safeEmail(),
            'phoneno'       =>fake()->phoneNumber(),
            'investment'    =>fake()->randomElement($investment),
            'money'         =>fake()->randomElement($money),


        ];
    }
}
