<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;

    //relacion plomorfica//

    protected $fillable=['url'];

    public function imagiable(){
        return $this->morphTo();
    }
}
