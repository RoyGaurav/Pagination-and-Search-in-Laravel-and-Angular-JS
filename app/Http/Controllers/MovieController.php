<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::paginate(15);
        return $movies;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Not required when using angular front-end
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(), [
            'title'=>'required|min:5|max:255|unique:movies',
            'director_name'=>'required',
            'duration'=>'required|integer',
            'gross'=>'required|integer',
            'budget'=>'required|integer',
            'genre'=>'required',
            'imdb_link'=>'required',
            'language'=>'required',
            'country'=>'required',
            'year'=>'required|integer',
        ]);
        if ($validator->fails()) {
            return Response::json(['failed' => $validator], 200);
        }
        $movie = new Movie();
        $movie->title = Input::get('title');
        $movie->director_name = Input::get('director_name');
        $movie->duration = Input::get('duration');
        $movie->gross = Input::get('gross');
        $movie->budget = Input::get('budget');
        $movie->genre = Input::get('genre');
        $movie->imdb_link = Input::get('imdb_link');
        $movie->language = Input::get('language');
        $movie->country = Input::get('country');
        $movie->year = Input::get('year');
        $movie->save();
        return Response::json(['success' => 'Movie Stored Successfully'], 200);
    }

    public function searchMovie(Request $request) {
        $movies = Movie::search($request->get('q'))->get();
        return $movies;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Not used in this project.
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Not used when using the angular front-end
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(Input::all(), [
            'title'=>'required|min:5|max:255|unique:movies',
            'director_name'=>'required',
            'duration'=>'required|integer',
            'gross'=>'required|integer',
            'budget'=>'required|integer',
            'genre'=>'required',
            'imdb_link'=>'required',
            'language'=>'required',
            'country'=>'required',
            'year'=>'required|integer',
        ]);
        if ($validator->fails()) {
            return Response::json(['failed' => $validator], 200);
        }
        $movie = Movie::find($id);
        if($movie) {
            $movie->title = Input::get('title');
            $movie->director_name = Input::get('director_name');
            $movie->duration = Input::get('duration');
            $movie->gross = Input::get('gross');
            $movie->budget = Input::get('budget');
            $movie->genre = Input::get('genre');
            $movie->imdb_link = Input::get('imdb_link');
            $movie->language = Input::get('language');
            $movie->country = Input::get('country');
            $movie->year = Input::get('year');
            $movie->save();
            return Response::json(['success' => 'Movie Stored Successfully'], 200);
        }else {
            return Response::json(['failed' => 'Movie Not Found'], 200);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $movie = Movie::find($id);
            $movie->delete();
            return Response::json(['success' => 'The movie was successfully deleted!'], 200);
        }catch(\Exception  $e) {
             return Response::json(['failed' => 'Oh Snap! An internal error occured while deleting the movie or the movie no longer exists. Please refresh the page or contact the administrator if the problem still persists.'], 200);
        }
    }
}
