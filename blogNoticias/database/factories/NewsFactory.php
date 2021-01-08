<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $authorObj = \DB::table('author')->select('id')->inRandomOrder()->take(1)->get();
        $categoryObj = \DB::table('category')->select('id')->inRandomOrder()->take(1)->get();

        return [
            'title' => $this->faker->name,
            'author' =>$authorObj[0]->id,
            'publishingDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'content' => $this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'category' => $categoryObj[0]->id,
        ];
    }
}
