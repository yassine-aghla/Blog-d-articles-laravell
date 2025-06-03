<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable=["content","article_id","user_id"];

    public function Article(){
        return $this->belongsTo(Article::class,"article_id");
    }
    public function User(){
        return $this->belongsTo(User::class,"user_id");
    }
}
