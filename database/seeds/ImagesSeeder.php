<?php

use Illuminate\Database\Seeder;
use App\Image;
use App\Project;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = Project::all();

        foreach ($projects as $project) {
            $image = new Image(); // This is an Eloquent model
            $image->path = "https://images.pexels.com/photos/1841120/pexels-photo-1841120.jpeg";
            $image->project_id = $project->id;
            $image->save();

            $image = new Image(); // This is an Eloquent model
            $image->path = "https://images.pexels.com/photos/1684915/pexels-photo-1684915.jpeg";
            $image->project_id = $project->id;
            $image->save();

            $image = new Image(); // This is an Eloquent model
            $image->path = "https://images.pexels.com/photos/245535/pexels-photo-245535.jpeg";
            $image->project_id = $project->id;
            $image->save();

            $image = new Image(); // This is an Eloquent model
            $image->path = "https://images.pexels.com/photos/3395709/pexels-photo-3395709.jpeg";
            $image->project_id = $project->id;
            $image->save();

            $image = new Image(); // This is an Eloquent model
            $image->path = "https://images.pexels.com/photos/2881281/pexels-photo-2881281.jpeg";
            $image->project_id = $project->id;
            $image->save();
        }
    }
}
