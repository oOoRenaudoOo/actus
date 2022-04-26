<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL-project : ACTUS</title>
</head>
<body>
    
    <h1>Détails de l'Actualité</h1>
   
    <div>
        <h3>{{ $actu->title }}</h3>
    </div>
     
    <div>
        <h5>{{ $actu->detail }}</h5>
    </div>


    <a href="/accueil">Retour Accueil</a>


    <div>
        <h4>Modification</h4>
        <form action="/update/{{$actu->id}}" method="post">
            @csrf
            <label for="">Mon titre</label>
            <input type="text" name="title" value="{{ $actu->title }}">
            <label for="">Description</label>
            <input type="text" name="detail" value="{{ $actu->detail }}" >
            <button type="submit">Modifier</button>
        </form>

    </div>
</body>
</html>