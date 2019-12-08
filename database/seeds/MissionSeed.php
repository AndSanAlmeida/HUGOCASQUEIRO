<?php

use Illuminate\Database\Seeder;
use App\Mission;
class MissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mission = new Mission(); // This is an Eloquent model
        $mission
            ->setTranslation('title', 'pt', json_encode("Nome em português"))
            ->setTranslation('body', 'pt', json_encode("conteudo em português"))

            ->setTranslation('title', 'en', json_encode("Nome em inglês"))
            ->setTranslation('body', 'en', json_encode("conteudo em inglês"))

            ->setTranslation('title', 'fr', json_encode("Nome em francês"))
            ->setTranslation('body', 'fr', json_encode("conteudo em francês"))
            ->save();
    }
}
