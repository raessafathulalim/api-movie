<?php

namespace App\Http\Controllers;

use App\Movielist;
use Illuminate\Http\Request;

class MovielistController extends Controller
{
    public function showAllMovies()
    {
        return response()->json(Movielist::paginate());
    }

    public function showOneMovie($id)
    {
        return response()->json(Movielist::find($id));
    }
}