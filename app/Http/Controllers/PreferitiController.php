<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Preferiti;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class PreferitiController extends Controller {

    public function index(){
        return view('preferiti'); 
    }
    
    public function GetPreferiti(){
    $user=User::find(session('userid')); 
    return $user->preferitis()->get();

}

public function remove_like($id){
    $user=User::find(session('userid'));  
    $request=request();
    $Serie = $user->preferitis()->where('id',$request['id'])->delete();
}

}

?> 