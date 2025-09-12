<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inquiry;

class InquiryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Inquiry::class;
    
    public function definition()
    {
        $faker = \Faker\Factory::create('ja_JP');

        return [
            'status' => $this->faker->randomElement(['未対応', '対応中', '対応済']),
            'inquiry_details' => $this->faker->realText(50),
            'remarks' => $this->faker->sentence(),
            'company' => $this->faker->company,
            'member_name' => $this->faker->name,
            'phone_number' => $this->faker->phoneNumber,
            'email' => $this->faker->safeEmail,
            'postal_code' => $this->faker->postcode,
            'prefecture' => $this->faker->prefecture ?? '東京都', // 日本語ローカライズを使っている場合
            'city' => $this->faker->city,
            'address' => $this->faker->address,
        ];
    }
}
