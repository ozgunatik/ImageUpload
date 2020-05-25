<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResimYukleModel extends Model
{
    protected $table = "resimyukle";
    public $timestamps = false;

    protected $fillable = [
        'title', 'image'
    ];
}
