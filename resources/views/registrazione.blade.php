@extends('layouts.guest')

@section('css')
<link rel='stylesheet' href='{{ asset('css/sigh.css') }}'>
@endsection

@section('script')
<script src='{{ asset('js/sigh.js') }}' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "/register";
    const BASE_URL="{{url('/')}}";
</script>
@endsection

@section('content')
<article>
    <main class="sigh"> 
    <h1> Registrati per guardare le tue serie tv preferite</h1>

<form id="form" nome="sigh_form" method='post' enctype="multipart/form-data" autocomplete="off" action="/register">
    @csrf
    <div class="nome">  
         <input type="text" name="Nome" placeholder="Nome"> 
         <span class="errore"> </span>
    </div>

    <div class="cognome">
         <input type="text" name="Cognome" placeholder="Cognome"> 
         <span class="errore"> </span>
    </div>

    <div class="email">
          <input type="text" name="email" placeholder="Email">
          <span class="errore"> </span> 
    </div>

    <div class="username">
         <input type="text" name="Username" placeholder="Username"> 
         <span class="errore"> </span>
    </div>

    <div class="password">
         <input type="password" name="Password" placeholder="Password"> 
         <span class="errore"> </span>
    </div>

    <div class="conferma_password">
         <input type="password" name="Conferma_Password" placeholder="Conferma Password"> 
         <span class="errore"> </span>
    </div>

    <div >    
         <label>&nbsp;<input type="submit" name="invio" value="Registrati" > </label>
    </div>
</form>
        <div class="login">Hai un account? <a href="/login">Accedi</a>
</main> 


@isset($error)

     <span class='error'>{{$error}} </span>; 
    
@endisset
   
</article>


@endsection
