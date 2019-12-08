<?php

use Illuminate\Database\Seeder;
use App\Slider;
class SliderSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider = new Slider(); // This is an Eloquent model
        $slider->path = "https://images.pexels.com/photos/374861/pexels-photo-374861.jpeg";
        $slider
            ->setTranslation('title', 'pt', json_encode("Slider 1 pt"))

            ->setTranslation('title', 'en', json_encode("Slider 1 en"))

            ->setTranslation('title', 'fr', json_encode("Slider 1 fr"))
            ->save();

        $slider2 = new Slider(); // This is an Eloquent model
        $slider2->path = "https://images.pexels.com/photos/374861/pexels-photo-374861.jpeg";
        $slider2
            ->setTranslation('title', 'pt', json_encode("Slider 2 pt"))

            ->setTranslation('title', 'en', json_encode("Slider 2 en"))

            ->setTranslation('title', 'fr', json_encode("Slider 2 fr"))
            ->save();
    }
}

