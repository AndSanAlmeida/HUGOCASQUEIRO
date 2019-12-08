<?php

use Illuminate\Database\Seeder;
use App\Service;
class ServiceSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $service = new Service(); // This is an Eloquent model
        $service->identifier = 01;
        $service
            ->setTranslation('title', 'pt', json_encode("Nome em português"))
            ->setTranslation('body', 'pt', json_encode("conteudo em português"))

            ->setTranslation('title', 'en', json_encode("Nome em inglês"))
            ->setTranslation('body', 'en', json_encode("conteudo em inglês"))

            ->setTranslation('title', 'fr', json_encode("Nome em francês"))
            ->setTranslation('body', 'fr', json_encode("conteudo em francês"))
            ->save();
    }
}
