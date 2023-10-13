<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert($this->getDataCategories());
        DB::table('sources')->insert($this->getDataSources());
        DB::table('news')->insert($this->getDataNews());

    }

    private function getDataCategories(){

        $faker = Factory::create();

        $data = [];

        for ($i=0;$i<10;$i++){
            $data[] = [
                'title' => $faker->word(),
                'importance' => $faker->numberBetween(1, 100),
                'is_active' => 1,
                'created_at' => now()
            ];
        }
        return $data;
    }

    private function getDataSources(){

        $faker = Factory::create();

        $data = [];

        for ($i=0;$i<20;$i++){
            $data[] = [
                'title' => $faker->sentence(),
                'link' => 'http://' . $faker->word() . '.ru',
                'is_active' => 1,
                'created_at' => now()
            ];
        }
        return $data;
    }

    private function getDataNews(){

        $faker = Factory::create();

        $data = [];

        for ($i=0;$i<100;$i++){
            $data[] = [
                'title' => $faker->sentence(),
                'text' => $faker->paragraphs(1,true),
                'category' => $faker->numberBetween(1, 10),
                'source' => $faker->numberBetween(1, 20),
                'is_active' => 1,
                'created_at' => now()
            ];
        }
        return $data;
    }

}
