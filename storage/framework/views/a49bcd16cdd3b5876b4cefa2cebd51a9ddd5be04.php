

<?php $__env->startSection('css'); ?>
<link rel='stylesheet' href='<?php echo e(asset('css/sigh.css')); ?>'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src='<?php echo e(asset('js/sigh.js')); ?>' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "/register";
    const BASE_URL="<?php echo e(url('/')); ?>";
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<article>
    <main class="sigh"> 
    <h1> Registrati per guardare le tue serie tv preferite</h1>

<form id="form" nome="sigh_form" method='post' enctype="multipart/form-data" autocomplete="off" action="/register">
    <?php echo csrf_field(); ?>
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


<?php if(isset($error)): ?>

     <span class='error'><?php echo e($error); ?> </span>; 
    
<?php endif; ?>
   
</article>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_proj\resources\views/registrazione.blade.php ENDPATH**/ ?>