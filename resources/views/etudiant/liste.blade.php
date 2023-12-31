<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet10_backend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container text-center">
         <div class="row">
  
            <div class="col s12">
            <h1>LISTE DES ETUDIANTS </h1>
            <hr>
             <a href="/ajouter" class="btn btn-primary">Ajouter un étudiant</a>
  <hr>
             @if (session('status'))
                <div class="alert alert-success">
                        {{ session('status') }}
                </div>
            @endif
          <table class="table">
             <thead>
                 <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Classe</th>
                    <th>Tuteurs</th>
                    <th>Villes</th>
                    <th>Nationalités</th>
                    <th>Groupes sanguins</th>
                    <th>Actions</th>
                 </tr>
            </thead>
            <tbody>
               @php
            $ide = 1;
             @endphp
              @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $ide }}</td>
                    <td><img src="/image/{{ $etudiant->photo }}" alt=""  style="width:60px; height:60px; border-radius:50px;"></td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->classe }}</td>
                    <td>{{ $etudiant->tuteur->nom }}</td>
                    <td>{{ $etudiant->ville }}</td>
                    <td>{{ $etudiant->nation }}</td>
                    <td>{{ $etudiant->groupe }}</td>
                   
                    
                    <td>
                        <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-info">Update</a>
                        <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-danger">Delete</a>
                    </td>
                   
                </tr>
              
                   @php 
                $ide += 1 ;
                   @endphp
               @endforeach
            </tbody>
            <a href="/tuteur" class="btn btn-primary">Voir la liste des tuteurs</a>
        </table>
        
       
        
    </div>
    
    </div>
  </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>