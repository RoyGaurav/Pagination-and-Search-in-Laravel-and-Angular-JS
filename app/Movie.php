<?php

namespace App;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use SearchableTrait;
    protected $searchable = [
        'columns' => [
            'movies.title' => 10,
            'movies.director_name'=>10,
            'movies.genre'=>3,
            'movies.language'=>5,
            'movies.country'=>7,
            'movies.year'=>8
        ],
    ];
}
