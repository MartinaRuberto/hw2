<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class LoginController extends Controller {


    public function login() {
        if(session('userid') != null) {
            return redirect("home");
        }
        else {
            return view('login');
        }
     }
     

     public function checklogin() {
        
        $user = User::where('username', request('Username'))->where('password', request('Password'))->first();

        if($user !== null) {
            Session::put('userid', $user->id);
            return redirect('home');
        }
        else {
            return view('login')->with('error', 'Credenziali errate');
        

        }
    }


    public function logout() {
        Session::flush();
        return view('Benvenuto');
    }

}





?>