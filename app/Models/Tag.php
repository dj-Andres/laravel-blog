<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable=['nombre','slug','color'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    //realacion  m=m//

    public function post(){
        return $this->belongsToMany(Post::class);
    }
}
