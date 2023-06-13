<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Hotel;
use Faker\Generator as Faker;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 10; $i++ ){
            $newHotel = new Hotel();
            $newHotel->nome_hotel = $faker->company();
            $newHotel->reference = $faker->bothify('??-########');
            $newHotel->address = $faker->streetAddress();
            $newHotel->postal_code = $faker->postcode();
            $newHotel->city = $faker->city();
            $newHotel->state = $faker->state();
            $newHotel->square_meters = $faker->numberBetween(30, 1000);
            $newHotel->rooms = $faker->numberBetween(2, 30);
            $newHotel->bathrooms = $faker->numberBetween(1, 6);
            $newHotel->type = $faker->randomElement(['monolocale', 'bilocale', 'appartamento', 'bifamigliare', 'attico', 'casa indipendente', 'villetta']);
            $newHotel->description = $faker->paragraphs(5, true);
            $newHotel->price = $faker->randomFloat(2, 20000, 5000000);
            $newHotel->is_available = $faker->randomElement([true, false]);
            $newHotel->energy_rating = $faker->randomElement(['a++', 'a', 'b', 'c', 'd']);
            $newHotel->save();
        }
    }
}
