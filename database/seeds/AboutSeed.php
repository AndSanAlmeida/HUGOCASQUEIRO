<?php

use Illuminate\Database\Seeder;
use App\About;
class AboutSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new About; // This is an Eloquent model
        $about
            ->setTranslation('title', 'pt', json_encode("Nome em português"))
            ->setTranslation('body', 'pt', json_encode("conteudo em português"))

            ->setTranslation('title', 'en', json_encode("Nome em inglês"))
            ->setTranslation('body', 'en', json_encode("conteudo em inglês"))

            ->setTranslation('title', 'fr', json_encode("Nome em francês"))
            ->setTranslation('body', 'fr', json_encode("conteudo em francês"))
            ->save();
    }
}
