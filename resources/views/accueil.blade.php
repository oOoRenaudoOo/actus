<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL-project : ACTUS</title>
</head>
<body>
    
    <h1>Liste des Actualités</h1>

        @forelse ($actualites as $item)
        
            <h3><a href="/detail/{{ $item->id }}">{{ $item->title }}</a></h3>
                
        @empty
            <h3>Il n'y a pas d'actualités</h3>
        @endforelse

</body>
</html>