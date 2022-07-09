<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;

use Illuminate\Support\Facades\Session;

class RegisterController extends Controller {

    protected function register(){
        $request= request();

        if($this->countErrors($request)==0){
           $newUser = User::create([
            'name' =>$request['Nome'],
            'surname'  =>$request['Cognome'],
            'email'  =>$request['email'],
            'username'  =>$request['Username'],
            'password'  =>$request['Password'],
             ]);
             if($newUser){
                 Session::put('userid',$newUser->id);
                 return redirect('home');
             }
        }
        else{
            return view('registrazione')->with('error', 'Controllare che tutti i parametri siano stati inseriti correttamente e che le password coincidano');

        }
    }

public function checkusername($username){
    $exists= User::where('username',$username)->exists();
    return array(['exists'=> $exists]);
}

public function checkemail($email){
    $exists= User::where('email',$email)->exists();
    return array(['exists'=> $exists]);
}

public function index(){
    return view('registrazione');
 }


private function countErrors($dati){
    $error=array();


    if(!preg_match('/^[a-zA-Z0-9_]{1,15}$/', $dati["Username"]))
   {
       $error[]= "Username non valido";
   }
   //vedere se gia esiste
   else {
    $username = User::where('username', $dati['Username'])->first();
    if ($username !== null) {
        $error[] = "Username già utilizzato";
    }
   }

   if(strlen($dati["Password"])<8)
   {
       $error[]= "Almeno 8 caratteri per la Password";
   }

   if(!preg_match('/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/', $dati["Password"]))  
    { 
        $error[]= "La password inserita non è valida. Inserire maiuscole, caratteri speciali e numeri";
    } 
    
    if(strcmp($dati["Password"], $dati["Conferma_Password"]) != 0) 
    { 
       $error[] = "La password e la password di conferma non coincidono"; 
    } 

   if(!filter_var($dati['email'], FILTER_VALIDATE_EMAIL))
   {
       $error[]= "email non valida";
   }else{

    $email = User::where('email', $dati['email'])->first();
            if ($email !== null) {
                $error[] = "Email già utilizzata";
            }

} 
return count($error);

}






}


?>