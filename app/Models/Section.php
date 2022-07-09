<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Section extends Model
{
public $timestamps=false;
protected $autoIncrement= false;

protected $fillable = [
   'id', 'title','immagine'
];

/*public function preferitis(){
    return $this->belongsToMany("App\Models\Section",'preferitis','section_id','user_id');
}

public function salvatis(){
    return $this->belongsToMany("App\Models\Section",'salvatis','section_id','user_id');
}*/

}
