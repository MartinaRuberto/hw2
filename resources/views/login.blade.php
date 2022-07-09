@extends('layouts.guest')

@section('css')
<link rel='stylesheet' href='{{ asset('css/login.css') }}'>
@endsection

@section('script')
<script src='{{ asset('js/login.js') }}' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "/login";
</script>
@endsection

@section('content')
<body>
 <article>   
 <main class="login"> 
 <h1>Accedi</h1>
 <br>

<form  id='form' name='login_form' method='post' action="/login">
    @csrf
    <div class="username" >
          <input type="text" name="Username" placeholder="Username">
          <span class="errore"> </span>
       </div>
     <div class="password">
         <input type="password" name="Password" placeholder="Password">
         <span class="error"> </span>
      </div>
     <div>
         <label>&nbsp;<input type="submit" name="Accedi" value="Accedi"> </label>
      </div>
</form>
@isset($error)

     <span class='error'>{{$error}} </span>; 
    
@endisset
<div class="signup">Non hai un account? <a href="/register">Iscriviti</a>
</main>
@endsection

</article>

</body>
