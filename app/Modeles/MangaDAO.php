<?php

namespace App\Modeles;

//use Illuminate\Database\Eloquent\Model;
use App\Metier\Manga;
use DB;
class MangaDAO extends DAO
{
    //
    public function getLesMangas()
    {
        $Mangas = DB::table('manga')->get();
        $lesMangas=array();
        foreach($Mangas as $leManga)
        {
            $id_manga=$leManga->id_manga;
            $lesMangas[$id_manga] = $this->creerObjetMetier($leManga);
        }
        return $lesMangas;
    }
    protected function creerObjetMetier(\stdClass $objet)
    {
        $leManga = new Manga();
        $leManga ->setIdManga($objet->id_manga);
        $leManga ->setPrix($objet->prix);
        $leManga ->setTitre($objet->titre);
        $leManga->setCouverture($objet->couverture);
        $genreDao = new GenreDAO();
        $leManga->setGenre(($genreDao->getGenreById($objet->id_genre)));
        return $leManga;
    }

}
