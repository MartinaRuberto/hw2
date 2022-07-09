<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class HomeController extends Controller {

    public function index(){
        return view('home'); 
    }


    public function load_home(){
        return Section::all();
        
}


}

?>    