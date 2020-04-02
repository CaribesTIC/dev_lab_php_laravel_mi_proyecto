<?php

use Illuminate\Database\Seeder;
use App\Review;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Review::create([
        	'name' 				=>	'Vacas locas',
        	'votes'				=>	33,
        	'fulldescription'		=>	'lalala'
        ]);
    }
}
