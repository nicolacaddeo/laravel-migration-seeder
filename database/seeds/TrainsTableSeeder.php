<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use App\models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {

        $currentTime = Carbon::now()->toDateTimeString();
        $currentTimeToArr = explode(' ', $currentTime);
        $today = $currentTimeToArr[0]; // stringa
        $todayToTime = strtotime($today);

        // variabile da inserire nel database
        $newFormat = date('Y-m-d', $todayToTime);

        for($i = 0; $i < 50; $i++) {

            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->firstName();
            $train->stazione_di_arrivo = $faker->firstName();
            $train->data = $faker->date();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->numero_carrozze = $faker->randomNumber(2, true);
            $train->save();
        }

        for($i = 0; $i < 10; $i++) {

            $train = new Train();
            $train->azienda = $faker->company();
            $train->stazione_di_partenza = $faker->firstName();
            $train->stazione_di_arrivo = $faker->firstName();
            $train->data = $newFormat;
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->codice_treno = $faker->randomNumber(5, true);
            $train->numero_carrozze = $faker->randomNumber(2, true);
            $train->save();
        }

    }
}
