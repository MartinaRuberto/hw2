

<?php $__env->startSection('css'); ?>
<link rel='stylesheet' href='<?php echo e(asset('css/login.css')); ?>'>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src='<?php echo e(asset('js/login.js')); ?>' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "/login";
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>
 <article>   
 <main class="login"> 
 <h1>Accedi</h1>
 <br>

<form  id='form' name='login_form' method='post' action="/login">
    <?php echo csrf_field(); ?>
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
<?php if(isset($error)): ?>

     <span class='error'><?php echo e($error); ?> </span>; 
    
<?php endif; ?>
<div class="signup">Non hai un account? <a href="/register">Iscriviti</a>
</main>
<?php $__env->stopSection(); ?>

</article>

</body>

<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_proj\resources\views/login.blade.php ENDPATH**/ ?>