<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<10; $i++){
            $viaggi = new Trip();
            $viaggi->title = 'Viaggio numero' . rand(1,100);
            $viaggi->description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus pariatur modi quibusdam, facere, commodi perspiciatis ex porro nostrum tempore nihil mollitia delectus animi! Similique voluptatem accusamus necessitatibus culpa nostrum pariatur' ;
            $viaggi->location = 'Nazione numero' . rand(1,100);;
            $viaggi->price = rand(10000,23333) / 100;
            $viaggi->save();
        }
    }
}
