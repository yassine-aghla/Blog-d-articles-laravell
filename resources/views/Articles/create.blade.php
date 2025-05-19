<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
     <div class="container">
        <form action="{{route('Articles.store')}}" method="Post"> 
            @csrf
              <div class="mb-3">
                            <label for="titre" class="form-label">titre de l'article</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="titre" 
                                name="titre" 
                                value="{{ old('titre') }}"
                                required
                            >
                          
                        </div>
                          <div class="mb-3">
                            <label for="description" class="form-label">description de larticle</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="description" 
                                name="description" 
                                value="{{ old('description') }}"
                                required
                            >
                          
                        </div>
                          <div class="mb-3">
                            <label for="content" class="form-label">contenu</label>
                            <textarea 
                                type="text" 
                                class="form-control" 
                                id="content" 
                                name="content" 
                                value="{{ old('content') }}"
                                required
                            >
                            </textarea>
                        </div>
                          <div class="mb-3">
                           <select name="categorie_id" id="categorie_id">
                            @foreach ($articles as $item)
                            <option value="">{{$item->category->name}}</option>
                            @endforeach
                           </select>
                          
                        </div>
        </form>
     </div>
</body>
</html>