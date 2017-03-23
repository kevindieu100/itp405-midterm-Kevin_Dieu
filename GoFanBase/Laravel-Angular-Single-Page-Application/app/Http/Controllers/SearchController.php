<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;

class SearchController extends Controller
{
   public function index()
   {
   		return view('dvds');
   }

   public function results(Request $request)
   {
   		$dvdTitle = $request->title;

   		$dvds = DB::table('dvds')
   			->select('title', 'rating_name', 'genre_name')
            ->join('ratings', 'dvds.rating_id', '=', 'ratings.id')
   			->join('genres', 'dvds.genre_id', '=', 'genres.id')
   			->where('title', 'LIKE', "%$dvdTitle%")
            ->orderby('title', 'asc')
   			->get();

      return Response::json($dvds);
   }
}
