<!DOCTYPE html>
<html>

<link rel='stylesheet' href='<?php echo e(asset('css/home.css')); ?>'>



<script src='<?php echo e(asset('js/home.js')); ?>' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "/home";
    const BASE_URL="<?php echo e(url('/')); ?>";
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
                <a  href="/lista">La mia lista</a>
                <a  href="/preferiti">Preferiti</a>
                <a  href="/recensioni">i tuoi feedback</a>
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
                    <a  href="/recensioni">i tuoi feedback</a>
                    
                  
              </div>
        </nav>

        <div id="info">
            
            <h1>Benvenuto.</h1> 
            <h2>Goditi lo spettacolo<br> </h2>
            <a  class="button" href="/inizia">Inizia</a>
        </div>
           
    </header>

    <section>

    <p>Le serie Tv piu viste </p>
    <div class="container_movie">
         
    </div>

    <p>Nuove Uscite</p>
    <div class="container_movie2">
         
        
    </div>

    </section>

    
</body>
</html>

    <footer>
       <address> Fondatore: Ruberto Martina</address>
       <p> 1000004205</p>
     
    </footer>

   </body>
   </html><?php /**PATH C:\xampp\htdocs\laravel_proj\resources\views/home.blade.php ENDPATH**/ ?>