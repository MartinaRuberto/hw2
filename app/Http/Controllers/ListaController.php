<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Salvati;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ListaController extends Controller {

    public function index(){
        return view('lista'); 
    }


    public function GetLista(){
        $user=User::find(session('userid')); 
        return $user->salvatis()->get();

    }


  

    public function remove_saved($id){
        $user=User::find(session('userid'));  
        $request=request();
        $Serie = $user->salvatis()->where('id',$request['id'])->delete();
}

}




?> 