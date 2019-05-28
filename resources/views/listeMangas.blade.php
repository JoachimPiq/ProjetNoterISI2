<table class="table table-bordered table-striped">
    <thead>
    <th>id</th>
    <th>prix</th>
    <th>titre</th>
    <th>couverture</th>
    <th>genre</th>


    </thead>
    @foreach($lesMangas as $manga)
        <tr>
            <td>{{$manga->getIdManga()}}</td>
            <td>{{$manga->getPrix()}}</td>
            <td>{{$manga->getTitre()}}</td>
            <td>{{$manga->getCouverture()}}</td>
            <td>{{($manga->getGenre())->getLibelleGenre()}}</td>

        </tr>
        @endforeach
</table>