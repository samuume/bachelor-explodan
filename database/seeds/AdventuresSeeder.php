<?php

use Illuminate\Database\Seeder;

use App\Adventures;


class AdventuresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

          $adventures = new Adventures;
          $adventures->title = 'Hawaii';
          $adventures->description = 'En TIL Fed beskrivelse';
          $adventures->body = 'Hele DEB ANDEN beskrivelsen her';
          $adventures->country = $faker->country;
          $adventures->tag = 'beaches';
          $adventures->image = 'image.png';

          $adventures->save();
    }
}
