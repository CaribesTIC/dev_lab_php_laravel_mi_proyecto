<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::unguard();

        for ($i=0; $i<100; $i++){
	    Book::create([
    	        'name' 		=>	'Libro ' . $i,
    	        'author'	=>	'Autor ' . $i,
    	        'isbn'		=>	'14445884' . $i
            ]);
        }

        Book::reguard();
    }
}
