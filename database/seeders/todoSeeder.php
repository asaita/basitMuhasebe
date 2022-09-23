<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class todoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        //truncate yerine delete kullansaydık veritabanındaki idler 1 den başlamazdı
        DB::table('todo')->delete();

        $fake_data=[];

        
        for ($i=0;$i<10;$i++) {
            $fake_data[]=[
                'todo'   => $faker->unique()->sentence(),
                'isDone'  => $faker->boolean(),
                'created_at'=>now(),
                'updated_at'=>now(),
            ];
        }
        DB::table('todo')->insert($fake_data);

    }
}