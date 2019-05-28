<?php

namespace App\Http\Controllers;
use  App\Modeles\MangaDAO;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    //
    public function getLesMangas() {
        $manga = new MangaDAO();
        $lesMangas = $manga->getLesMangas();
        return view('listeMangas',compact('lesMangas'));
    }
}
