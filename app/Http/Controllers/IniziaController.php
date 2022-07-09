<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Section;
use App\Models\Salvati;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Preferiti;

class IniziaController extends Controller {

    public function index(){
        return view('inizia'); 
    }


public function add_saved(){
    $request=request();
    $newSerie = Salvati::create([
    'id'=> $request['id'],
    'title'=> $request['title'],
    'immagine'=> $request['immagine'],
    'user_id' => session('userid')
     ]);
    }


    public function add_like(){
        $request=request();
        $newSerie = Preferiti::create([
        'id'=> $request['id'],
        'title'=> $request['title'],
        'immagine'=> $request['immagine'],
        'user_id' => session('userid')
         ]);
        }




   public function remove_saved($id){
    $user=User::find(session('userid'));  
    $request=request();
    $Serie = $user->salvatis()->where('id',$request['id'])->delete();
   
   }


   public function remove_like($id){
    $user=User::find(session('userid'));  
    $request=request();
    $Serie = $user->preferitis()->where('id',$request['id'])->delete();
   
   }

   
   
  

}

?> 