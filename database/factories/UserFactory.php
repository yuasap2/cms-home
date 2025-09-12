<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class UserFactory extends Factory
{
    protected $model = \App\Models\User::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('ja_JP');
        
        return [
            'member_name' => $faker->name,
            'furigana' => $faker->kanaName,
            'email' => $faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('password'), 
            'phone_number' => $faker->regexify('0[789]0-[0-9]{4}-[0-9]{4}'),
            'postal_code' => $faker->postcode,
            'prefecture' => $faker->prefecture,
            'city' => $faker->city,
            'address' => $faker->streetAddress,
            'remarks' => $faker->optional()->realText(255), 
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
