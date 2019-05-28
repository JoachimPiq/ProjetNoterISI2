<?php

namespace App\Modeles;

use App\Metier\Conference;
use App\Metier\Genre;
use Illuminate\Database\Eloquent\Model;
use DB;

class GenreDAO extends DAO
{
    //

    public function getGenreById($idGenre)
    {
        $monGenre = DB::table('genre')->where('id_Genre','=',$idGenre)->first();
        $genre = $this->creerObjetMetier($monGenre);
        return $genre;
    }
    protected function creerObjetMetier(\stdClass $objet)
    {
        $leGenre = new Genre();
        $leGenre->setIdGenre($objet->id_genre);
        $leGenre->setLibelleGenre($objet->lib_genre);

        return $leGenre;
    }
    public function creerGenre(Genre $unGenre)
    {
        DB::table('Genre')->insert(['gente_lib'=>$unGenre->getLibeleGenre(),'id_genre'=>$unGenre->getIdGenre()]);
    }
}
