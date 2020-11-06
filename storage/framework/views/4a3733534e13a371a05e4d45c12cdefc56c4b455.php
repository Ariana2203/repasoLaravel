<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="">Pintores</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo e(action('UserController@index')); ?>">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(action('UserController@khalo')); ?>">Frida Kahlo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(action('UserController@miguel')); ?>">Miguel Ángel</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(action('UserController@dali')); ?>">Salvador Dalí</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(action('UserController@picasso')); ?>">Pablo Picasso</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(action('UserController@monet')); ?>">Claude Monet</a>
       </li>
    </ul>
  </div>
</nav>
<?php $__env->startSection('navbar'); ?>
<?php echo $__env->yieldSection(); ?>
  
<?php /**PATH C:\laragon\www\Pintores\resources\views/includes/navbar.blade.php ENDPATH**/ ?>