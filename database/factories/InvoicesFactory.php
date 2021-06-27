<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Invoices;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoicesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Invoices::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'names' => $this->faker->name(),
           'email' => $this->faker->unique()->email,
           'items' => rand(1,50),
           'subtotal' => rand(20,2000),
           'date' => Carbon::tomorrow(),
           'sent' => rand(0, 1),
        ];
    }
}
