<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div>
    <a href="{{route('categories.create')}}"class="btn btn-primary">creer un nouvelle categorie</a>
    </div>
    <div class="container">    
    <table class="table">
        <tr>
        <th>Id</th>
        <th>name</th>
        <th>statut</th>
        </tr>
      @foreach ($categorie as $item)
      <tr>
          <td>{{$item->id}}</td>
          <td>{{$item->name}}</td>
          <td>
            <a href="{{route('categories.edit',$item)}}" class="btn btn-warning">modifier</a>
            <form action="{{route('categories.destroy',$item)}}" method="POST" class="btn btn-danger">
                @csrf
                @method('DELETE')

                <button type="submit">Supprimer</button>
                 
            </form>
          </td>
      </tr>
        @endforeach
    </table>    
        
    </div>

</body>
</html>