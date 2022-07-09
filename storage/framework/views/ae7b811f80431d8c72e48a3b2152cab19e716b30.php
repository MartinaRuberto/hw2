<!DOCTYPE html>
<html>

<link rel='stylesheet' href='<?php echo e(asset('css/inizia.css')); ?>'>



<script src='<?php echo e(asset('js/inizia.js')); ?>' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "/inizia";
    const BASE_URL="<?php echo e(url('/')); ?>";
    CSFR_TOKEN= '<?php echo e(csrf_token()); ?>';

</script>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">

</head>
<body>
                                                            
  <header>
    <nav>
            <div id="Logo">
                Series Now
              </div>

              <div id="link">
                <a  href="/logout">Esci</a>
                <a  href="/lista">La tua lista</a>
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
                   <a  href="/lista">La tua lista</a>
                   <a  href="/preferiti">Preferiti</a>
                   <a  href="/home">Home</a>
                  
              </div>

              
        </nav>

        <form class="no_result">
              <h2>Ricerca</h2>
              Inserisci la serie tv che desideri:
              <input type="text" id="series"> 
              <input type="submit"  value="Cerca" >
  
        </form>

    </header>

<div class="container_movie" >
   

</div>

<footer>
       <address> Fondatore: Ruberto Martina</address>
       <p> 1000004205</p>
     
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel_proj\resources\views/inizia.blade.php ENDPATH**/ ?>