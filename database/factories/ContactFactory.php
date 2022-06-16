<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
            'is_client' => random_int(0, 1),
            'name' => $this->faker->company(), 
            'siren' => Str::random(10), 
            'website_url' => 'https://test.com', 
            'facebook_url' => 'https://test.com', 
            'instagram_url' => 'https://test.com', 
            'note' => '',
            'activity' => 'Pâtisserie',
            'zip_code' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'address' => $this->faker->streetAddress()
        ];
    }
}
