<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeed::class);
         $this->call(MissionSeed::class);
         $this->call(AboutSeed::class);
         $this->call(SliderSeed::class);
         $this->call(ServiceSeed::class);
    }
}
