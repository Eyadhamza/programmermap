<?php

namespace Database\Factories;

use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrackFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Track::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->title,
            'image'=>'https://randomuser.me/api/portraits/med/men/'.$this->faker->numberBetween(0,100).'.jpg',
            'video_url'=>'url of video',
            'description'=>'asdasdasd assdas dasd asd asd '
        ];
    }
}
