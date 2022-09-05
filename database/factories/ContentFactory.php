<?php

namespace Database\Factories;

use App\Models\Content;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Content>
 */
class ContentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => '1',
            'content' => 'Added using a factory',
            'divsize' => '12',
            'divheight' => '100'
        ];
    }
}
