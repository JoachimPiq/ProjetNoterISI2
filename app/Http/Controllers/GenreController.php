<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metier\Genre;
use App\Modeles\GenreDao;
use App\Http\Requests\InsertionGenreRequest;

class GenreController extends Controller
{
    //
    public function ajoutGenre()
    {
        return view('formAjoutGenre');
    }

    public function postAjoutGenre(InsertionGenreRequest $request)
    {
        $monGenre = new Genre();
        $monGenre->setLibelleGenre($request->input('intituleGenre'));
        $monGenreDao = new GenreDAO();
        $monGenreDao->creerGenre($monGenre);
        return view('insertionOK');
    }


}
