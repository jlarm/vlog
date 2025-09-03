<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
final class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'uuid' => $this->faker->uuid(),
            'title' => $this->faker->word(),
            'body' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
