<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   protected $fillable=['titre','description','content','categorie_id'];

   public function category(){
    return $this->belongsto(category::class,'categorie_id');
   }
}
