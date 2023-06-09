<?php

namespace Database\Seeders;

use App\Models\Wine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = file_get_contents('https://api.sampleapis.com/wines/reds');
        $wines = json_decode($data);
        foreach($wines as $wine){
            $new_wine = new Wine();
            $new_wine->winery = $wine->winery;
            $new_wine->wine = $wine->wine;
            dump($wine->rating->average);
            dump($wine->rating->reviews);
            // $new_wine->rating_average = $wine['wine'];

        }
        // dump( $wines);
    }
}
