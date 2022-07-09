<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Review extends Model
{

    protected $connection = 'mongodb';

    public $timestamps=false;



protected $fillable = [
   'id','title','user_id','immagine','text'
];



}


