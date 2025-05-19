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
    <div class="container">
        <table class="table">
        <tr>
        <th>id</th>
        <th>titre</th>
        <th>description</th>
        <th>content</th>
        </tr>
        <tr>
         @foreach ($Articles as $item)
             <td>{{$item->id}}</td>
             <td>{{$item->titre}}</td>
             <td>{{$item->description}}</td>
             <td>{{$item->content}}</td>
         @endforeach
        </tr>
        
        </table>
    </div>
</body>
</html>