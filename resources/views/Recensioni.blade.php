<!DOCTYPE html>
<html>

<link rel='stylesheet' href='{{ asset('css/recensioni.css') }}'>



<script src='{{ asset('js/recensioni.js') }}' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "/recensioni";
    const BASE_URL="{{url('/')}}";
</script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Series Now</title>
    
</head>
<header>
        <nav>
            <div id="Logo">
                Series Now
              </div>

              <div id="link">
                <a  href="/logout">Esci</a>
                <a  href="/lista">La mia lista</a>
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
                    <a  href="/lista">La mia lista</a>
                    <a  href="/preferiti">Preferiti</a>
                    <a  href="/home">Home</a>
                   
                  
              </div>
        </nav>

        <div id="info">
            <h1>Lascia una tua opinione sui film che hai guardato </h1> 
        </div>
           
    </header>
    <section>
<div class="container_reviews">
    
    
</div>

</section>


</body>
</html>

<footer>
   <address> Fondatore: Ruberto Martina</address>
   <p> 1000004205</p>
 
</footer>

</body>
</html>