<!DOCTYPE html>

<html>
<link rel='stylesheet' href='{{ asset('css/home.css') }}'>



<script src='{{ asset('js/lista.js') }}' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "/lista";
    const BASE_URL="{{url('/')}}";
    CSFR_TOKEN= '{{ csrf_token()}}';
</script>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Series Now</title>

</head>

<body>
    <header>
        <nav>
            <div id="Logo">
                Series Now
              </div>

              <div id="link">
                <a  href="/logout">Esci</a>
                <a  href="/inizia">Cerca</a>
                <a  href="/preferiti">Preferiti</a>
                <a  href="/home">Home</a>

              </div>

              <div id="menu" >
                  <div></div>
                  <div></div>
                  <div></div>

              </div>  

                  <div class="links_mobile" class="hidden">
                    <a  href="/logout">Esci</a>
                    <a  href="/inizia">Cerca</a>
                    <a  href="/preferiti">Preferiti</a>
                    <a  href="/home">Home</a>
                  
              </div>

        </nav>

           
    </header>

    <section>

    <p>Le tua lista</p>
    <div class="container_movie">
         
    </div> 

    </section>

    

    <footer>
       <address> Fondatore: Ruberto Martina</address>
       <p> 1000004205</p>
     
    </footer>

   </body>
   </html>