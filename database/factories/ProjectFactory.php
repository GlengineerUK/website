<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->name;
        return [
            'title' => $title,
            'slug' => Str::of($title)->slug(),
            'content' => $this->faker->randomHtml(15, 6),
            'link_url' => $this->faker->url,
            'image_url' => $this->faker->imageUrl(),
            'published' => $this->faker->boolean,
        ];
    }
}
