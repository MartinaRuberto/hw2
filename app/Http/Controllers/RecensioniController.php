<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Section;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class RecensioniController extends Controller {

    public function index(){
        return view('Recensioni'); 
    }

    public function aggiungi_recensioni(){
        $request=request();
        $newSerie = Review::create([
        'text' => $request['text'],
        'id'=> $request['id'],
        'title'=> $request['title'],
        'immagine'=> $request['immagine'],
        'user_id' => session('userid')
         ]);
    }

    public function GetRecensioni(){
    $recensioni=Review::where('user_id',session('userid'))->get();
    return $recensioni;

    }

}

?>    