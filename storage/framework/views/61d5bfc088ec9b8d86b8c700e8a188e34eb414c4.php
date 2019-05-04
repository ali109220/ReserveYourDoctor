<?php /* C:\xampp\htdocs\laravel_With_Vue\resources\views/Authors/index.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="content">

<nav class="nav">
  <router-link class="nav-link active" to="/one">Active</router-link>
  <router-link class="nav-link" to="/two">Link</router-link>
</nav>
<router-view></router-view>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>