<?php

use Illuminate\Database\Seeder;
use App\TrainModel;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');
        for($i=0; $i<100; $i++){

            $newTrainFaker = new TrainModel();
            $newTrainFaker->azienda = $faker->words();
            $newTrainFaker->stazione_di_partenza = $faker->city();
            $newTrainFaker->stazione_di_arrivo = $faker->city();
            $newTrainFaker->orario_di_partenza = $faker->time();
            $newTrainFaker->orario_di_arrivo = $faker->time();
            $newTrainFaker->codice_treno = $faker->bothify('??-#####');
            $newTrainFaker->numero_carrozze = $faker->numberBetween(1, 10);
            $newTrainFaker->in_orario = $faker->boolean();
            $newTrainFaker->cancellato = $faker->boolean();
            $newTrainFaker->save();

            //problema nel compilare il db tramite il seeder
        }
    }
}