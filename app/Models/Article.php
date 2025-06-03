<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Commenataire;

class Article extends Model
{
   protected $fillable=['titre','description','content','categorie_id','user_id'];

   public function category(){
    return $this->belongsto(category::class,'categorie_id');
   }
   public function commentaires(){
      return $this->hasMany(Commentaire::class);
   }

   public function User(){
      return $this->belongsTo(User::class,'user_id');
   }

}
