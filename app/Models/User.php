<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{
public $timestamps=false;
protected $fillable = [
    'username', 'password', 'email', 'name', 'surname'
];

public function preferitis(){
    return $this->HasMany("App\Models\Preferiti");
}

public function salvatis(){
    return $this->HasMany("App\Models\Salvati");
}

public function reviews(){
    return $this->HasMany("App\Models\Review");
}

}

?>
  





