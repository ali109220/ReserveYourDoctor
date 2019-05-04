<?php /* C:\xampp\htdocs\laravel_With_Vue - Copy\resources\views/ControlPanel/home.blade.php */ ?>
<?php $__env->startSection('content'); ?>
<div class="content" id="app">
   <ul class="nav nav-tabs">
    <li class="nav-item">
      <router-link class="nav-link" to="/city">City</router-link>
    </li>
    <li class="nav-item">
      <router-link class="nav-link" to="/area">Area</router-link>
    </li>
   </ul>
  <router-view></router-view>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>