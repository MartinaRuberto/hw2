<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Preferiti extends Model
{
public $timestamps=false;

protected $fillable = [
    'id','title','user_id','immagine'
];

public function users(){
    return $this->belongsTo("App\Models\User");
}



}