<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PracticeController extends Controller {

    function getBookWithEloquent() {
        
    	$book = new \App\Book();
        
        echo $book->all();

        return 'getBookWithEloquent';
    }

    function getExample4() {
        
    	$book = new \App\Book();
        
        $book->title = 'Harry Potter';
        $book->author = 'JK ROwling';

        $book->save();

        return 'Example  4';
    }

    function getExample5() {
        
    	$book = new \App\Book();
        
        $harry_potter = $book->find(8);

        $harry_potter->delete();

        return 'Example  5';
    }

    function getExample6() {
        
    	$book = new \App\Book();
        
        $book_to_update = $book->find(1);

        $book_to_update->title = 'Green Eggs adn Ham';

        $book_to_update->save();

        return 'Example  6';
    }

    function getExample7() {
        
		$book = \App\Book::where('author', 'LIKE', '%Scott%')->first();

		if($book) {
		    return $book->title;
		}
		else {
		    return 'Book not found.';
		}
    }
}