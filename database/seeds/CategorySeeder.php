<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category(); // This is an Eloquent model
        $category->filter = '*';
        $category
            ->setTranslation('name', 'pt', json_encode("Todos"))
            ->setTranslation('name', 'en', json_encode("All"))
            ->setTranslation('name', 'fr', json_encode("Tout"))
            ->save();

        $category = new Category(); // This is an Eloquent model
        $category->filter = '.interior';
        $category
            ->setTranslation('name', 'pt', json_encode("Interior"))
            ->setTranslation('name', 'en', json_encode("Inside"))
            ->setTranslation('name', 'fr', json_encode("Intérieur"))
            ->save();

        $category = new Category(); // This is an Eloquent model
        $category->filter = '.exterior';
        $category
            ->setTranslation('name', 'pt', json_encode("Exterior"))
            ->setTranslation('name', 'en', json_encode("Outside"))
            ->setTranslation('name', 'fr', json_encode("Extérieur"))
            ->save();

        $category = new Category(); // This is an Eloquent model
        $category->filter = '.kitchen';
        $category
            ->setTranslation('name', 'pt', json_encode("Cozinha"))
            ->setTranslation('name', 'en', json_encode("Kitchen"))
            ->setTranslation('name', 'fr', json_encode("Cuisine"))
            ->save();
    }
}
