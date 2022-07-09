<!DOCTYPE html>

<html>

<link rel='stylesheet' href='<?php echo e(asset('css/preferiti.css')); ?>'>

<script src='<?php echo e(asset('js/preferiti.js')); ?>' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "/preferiti";
    const BASE_URL="<?php echo e(url('/')); ?>";
    CSFR_TOKEN= '<?php echo e(csrf_token()); ?>';
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
                <a  href="/lista">La mia lista</a>
                <a  href="/home">Home</a>
                <a  href="/recensioni">i tuoi feedback</a> 

              </div>


              <div id="menu" >
                  <div></div>
                  <div></div>
                  <div></div>

              </div>  

                  <div class="links_mobile" class="hidden">
                   <a  href="/logout">Esci</a>
                   <a  href="/inizia">Cerca</a>
                   <a  href="/lista">La mia lista</a>
                   <a  href="/home">Home</a> 
                   <a  href="/recensioni">i tuoi feedback</a> 
                       
                  
              </div>
        </nav>

           
    </header>
<div class='ringraziamenti'> </div>
    <section>

    <p>Le tue serie preferite</p>
    <div class="container_movie">

        <div class="recensione_modale" class="hidden">

            <div class="interno">
                
             <form class="commenti" >
              <h2>Inviaci il tuoi feedback sui tuoi film preferiti</h2>
              <input type="text" id="feedback"> 
              <input type="submit"  value="Invia" id='invia' >
  
             </form>
            <div>
  
        </div>

    </div> 

    </section>

    

    <footer>
       <address> Fondatore: Ruberto Martina</address>
       <p> 1000004205</p>
     
    </footer>

   </body>
   </html><?php /**PATH C:\xampp\htdocs\laravel_proj\resources\views/preferiti.blade.php ENDPATH**/ ?>