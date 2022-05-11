<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
       
        $genderRandom = rand(1,2);
            if($genderRandom == 1){
            $gender='Male';    
            $name = $this->faker->name($gender);
        }elseif($genderRandom==2){
            $gender='Female';
            $name = $this->faker->name($gender);
            
        }

        
        return [
            'fullname'          => $name,
            'email'             => $this->faker->unique()->safeEmail(),
            'phone'             => $this->faker->numberBetween($min = 3101000000, $max = 3202000000),
            'birthdate'         => $this->faker->dateTimeBetween('1960-01-01','1999-01-01'),
            'gender'            => $gender,
            'address'           => $this->faker->address(),
            'email_verified_at' => now(),
            'password'          => $this->faker->password(), // password
            'remember_token'    => Str::random(10),
            'photo'             => $this->faker->imageUrl(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
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
