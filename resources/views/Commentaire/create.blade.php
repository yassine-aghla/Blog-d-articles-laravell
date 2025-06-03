<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div> 
            @foreach ($commentaires as $comments)
                
                <strong>{{$comments->User->name}}:</strong><p>{{$comments->content}}</p>
            @endforeach
            
        </div>
        <div>
        <form action="{{route('Commentaire.store')}}" method="Post">
            @csrf
            <input type="hidden" id="article_id" name="article_id" value="{{$article->id}}">
            <input type="text" id="content" name="content">
            <button type="submit">commenter</button>
        </form>   
        <div> 
    </div>

</body>
</html>