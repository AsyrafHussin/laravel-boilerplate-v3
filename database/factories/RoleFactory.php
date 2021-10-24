<?php

namespace Database\Factories;

use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [];
    }

    /**
     * Define the admin default state.
     *
     * @return array
     */
    public function admin()
    {
        return $this->state([
            'name' => 'admin',
            'title' => 'admin',
        ]);
    }

    /**
     * Define the user default state.
     *
     * @return array
     */
    public function user()
    {
        return $this->state([
            'name' => 'user',
            'title' => 'user',
        ]);
    }
}
