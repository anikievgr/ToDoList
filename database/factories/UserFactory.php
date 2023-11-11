<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    /**
     * Создает пользователя(админа)
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Глеб Аникиев',
            'email' => 'anikiev.gleb.2005@yandex.ru',
            'email_verified_at' => now(),
            'password' => Hash::make('551151' ), // password
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
