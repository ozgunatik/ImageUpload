<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AjaxImage extends Model
{
   protected $table = "ajax_images";

   protected $fillable = [

    'title', 'image'

];
}
