<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Phone;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

      for ($i=0; $i < 10 ; $i++) {
        $newPhone = new Phone();
        $newPhone->brand = $faker->randomElement(['Apple','Samsung','Huawei','Xiaomi']);
        $newPhone->modello = $faker->bothify('###?');
        $newPhone->chipset = $faker->randomElement(['Snapdragon', 'Kirin']);
        $newPhone->display_size = $faker->numberBetween(4,7);
        $newPhone->save();
      }

    }

}
