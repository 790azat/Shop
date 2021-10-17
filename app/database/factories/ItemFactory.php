<?php

namespace Database\Factories;

use App\Models\item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'discription' => $this->faker->text(),
            'price' => $this->faker->numberBetween('100','100000'),
            'img' => 'https://thumbs.dreamstime.com/z/best-stores-logo-design-shop-icon-135610452.jpg'

        ];
    }
}
