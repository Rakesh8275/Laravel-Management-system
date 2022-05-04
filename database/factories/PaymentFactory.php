<?php

namespace Database\Factories;

use App\Models\payment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class PaymentFactory extends Factory
{
    protected $model = payment::class;
    public function definition()
    {
        return [
            'payment_id' => $this->faker->id(),
            'user_id' => $this->faker->unique()->id(),
            'amount' => $this->fake->amount(),
            'remember_token' => Str::random(10),
        ];
    }
}
