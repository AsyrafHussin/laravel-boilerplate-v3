<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
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

    /**
     * Define admin default state.
     *
     * @return array
     */
    public function admin()
    {
        return $this
            ->state([
                'name' => 'admin',
                'email' => 'admin@domain.com',
                'password' => bcrypt('admin123'),
            ])->afterCreating(function (User $user) {
                $user->assign('admin');
            });
    }

    /**
     * Define user default state.
     *
     * @return array
     */
    public function user()
    {
        return $this
            ->state([
                'name' => 'user',
                'email' => 'user@domain.com',
                'password' => bcrypt('user123'),
            ])->afterCreating(function (User $user) {
                $user->assign('user');
            });
    }
}
