<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <section class="container">
        <div> 
            <a href="{{route("Articles.create")}}" class="btn btn-primary hover:bg-danger">Ajouter un article</a>
        </div>
        {{-- <table class="table">
        <tr>
        <th>id</th>
        <th>titre</th>
        <th>description</th>
        <th>content</th>
        <th>statut</th>
        </tr>
                 @foreach ($Articles as $item)

        <tr>
             <td>{{$item->id}}</td>
             <td>{{$item->titre}}</td>
             <td>{{$item->description}}</td>
             <td>{{$item->content}}</td>
             <td>
                <a href="{{route("Articles.edit",$item)}}" class="btn btn-warning">Modifier</a>
                <form action="{{route("Articles.destroy",$item)}}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit">Supprimer</button>
                </form>
             </td>
        </tr>
         @endforeach

        </table> --}}
 @foreach ($Articles as $item)
<div class="card mb-4 shadow-sm">
    <div class="card-body">
        <div class="d-flex justify-content-between align-items-start mb-3">
            <div>
                <span class="badge bg-primary mb-2">Titre :</span> 
                <h2 class="card-title">{{ $item->title }}</h2>
            </div>
            <span class="badge bg-secondary">{{ $item->category?->name ?? 'Aucune catégorie' }}</span>
        </div>
        <div class="mb-3 p-3 bg-light rounded">
            <h4>{{ $item->description }}</h4>
        </div>
        <div class="card-text p-3 mb-4 bg-white border rounded">
            {{ $item->content }}
        </div>

        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <a href="{{ route('Articles.edit', $item) }}" class="btn btn-warning me-2">
                    <i class="bi bi-pencil"></i> Modifier
                </a>
                <form action="{{ route('Articles.destroy', $item) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr ?')">
                        <i class="bi bi-trash"></i> Supprimer
                    </button>
                </form>
            </div>
            <small class="text-muted">
                Créé le {{ $item->created_at->format('d/m/Y') }}
            </small>
        </div>
    </div>
</div>
@endforeach
    </section>
</body>
</html>