<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class FetchController extends Controller {

    public function fetch_inizia($_q){
    
    $_series=urlencode($_q);
    $_url='https://api.themoviedb.org/3/search/tv?api_key='.env('API_KEY').'&query='.$_series;

    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$_url);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    $result=curl_exec($curl);
    $json=json_decode($result,true);
    curl_close($curl);
    if(count($json["results"])==0){
        return $not_fount=0;
    }else{
   for($i=0;$i<count($json["results"]);$i++){
    $preferiti=false;
    $salvati=false;
    $user= User::find(session('userid'));
    $query=$user->preferitis()->where('id',$json['results'][$i]['id'])->first();
    $res=$user->salvatis()->where('id',$json['results'][$i]['id'])->first();
    if($query!=null){
        $preferiti=true;
    }
    if($res!=null){
        $salvati=true;
    }

    $id=$json['results'][$i]['id'];
    $title=$json['results'][$i]['name'];
    $path=$json['results'][$i]['poster_path'];
    $immagine='https://www.themoviedb.org/t/p/w600_and_h900_bestv2'.$path;
    $array[]=array('id'=>$id,'name'=>$title,'image'=>$immagine,'preferiti'=>$preferiti,'salvati'=>$salvati);
}
    
}
   $nuovo_array=array("json"=>$array);
   return $array;
    
 }

    public function load_home1(){

        $_url='https://api.themoviedb.org/3/trending/tv/week?api_key='.env('API_KEY');

        $curl = curl_init();
        curl_setopt($curl,CURLOPT_URL,$_url);
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        $result=curl_exec($curl);
        curl_close($curl);
        return $result;

    }

}




?> 