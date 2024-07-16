<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class bookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('books')->insert([
                'title' => $faker->text(25),
                'thumbnail' => 'https://icdn.24h.com.vn/upload/2-2024/images/2024-06-29/dT-duc-lo-kich-ban-bi-dan-Mach-cam-chan-hiem-hoa-cham-luan-luu-o-EURO-Clip-1-phut-Bong-da-24H-449263113_457399657018671_2218226989595565566_n--2-1719615531-720-width740height629.jpg',
                'author' => $faker->text(25),
                'publisher' => $faker->text(25),
                'Publication' => $faker->dateTime(),
                'Price'=> $faker->randomFloat(5),
                'Quantity'=>$faker->randomNumber(5),
                'Category_id' => rand(1, 5),
            ]);
        }
    }
}
