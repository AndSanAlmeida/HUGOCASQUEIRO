<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $project = new Project(); // This is an Eloquent model
        $project->main_photo = "https://images.pexels.com/photos/1841120/pexels-photo-1841120.jpeg";
        $project->category_id = 2;
        $project
            ->setTranslation('title', 'pt', json_encode("Nome em português"))
            ->setTranslation('family', 'pt', json_encode("teste,quatro"))

            ->setTranslation('title', 'en', json_encode("Nome em inglês"))
            ->setTranslation('family', 'en', json_encode("teste,quatro"))

            ->setTranslation('title', 'fr', json_encode("Nome em francês"))
            ->setTranslation('family', 'fr', json_encode("teste,quatro"))
            ->save();

        $project = new Project(); // This is an Eloquent model
        $project->main_photo = "https://images.pexels.com/photos/1841120/pexels-photo-1841120.jpeg";
        $project->category_id = 3;
        $project
            ->setTranslation('title', 'pt', json_encode("Nome em português"))
            ->setTranslation('family', 'pt', json_encode("teste,quatro"))

            ->setTranslation('title', 'en', json_encode("Nome em inglês"))
            ->setTranslation('family', 'en', json_encode("teste,quatro"))

            ->setTranslation('title', 'fr', json_encode("Nome em francês"))
            ->setTranslation('family', 'fr', json_encode("teste,quatro"))
            ->save();

        $project = new Project(); // This is an Eloquent model
        $project->main_photo = "https://images.pexels.com/photos/1841120/pexels-photo-1841120.jpeg";
        $project->category_id = 4;
        $project
            ->setTranslation('title', 'pt', json_encode("Nome em português"))
            ->setTranslation('family', 'pt', json_encode("teste,quatro"))

            ->setTranslation('title', 'en', json_encode("Nome em inglês"))
            ->setTranslation('family', 'en', json_encode("teste,quatro"))

            ->setTranslation('title', 'fr', json_encode("Nome em francês"))
            ->setTranslation('family', 'fr', json_encode("teste,quatro"))
            ->save();
    }
}
