<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name('male'),
            'email'=>$this->faker->email(),
            'phone'=>$this->faker->phoneNumber(),
            'more'=>$this->faker->text(150)
        ];
    }
}
