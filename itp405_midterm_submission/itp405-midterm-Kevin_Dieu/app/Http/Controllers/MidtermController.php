<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Book;
use App\Author;
use App\Publisher;

class MidtermController extends Controller
{
    //function for question 1
    public function question1($id)
    {
      // reviews.headline
      // reviews.body
      // reviews.rating
      // books.title
      // author.first_name
      // author.last_name
      // publishers.name aliased to "publisher_name" i.e. SELECT publishers.name AS publisher_name

      $results = DB::table('books')
        ->select('books.title', 'reviews.body', 'reviews.headline', 'reviews.rating', 'authors.first_name', 'authors.last_name', 'publishers.name')
        ->join('authors', 'books.author_id', '=', 'authors.id')
        ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
        ->join('reviews', 'books.id', '=', 'reviews.book_id')
        ->where('books.id', '=', $id)
        ->first();

      dd($results);
    }

    //function for question 2
    public function question2()
    {
      $books = Book::get();
      return view('question2', [
        'books' => $books
      ]);
    }
}
