<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo $__env->yieldContent('title', 'Contacts'); ?></title>
    <?php echo $__env->yieldContent('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bs5.css')); ?>">
<link rel="stylesheet" href="<?php echo e(asset('assets/css/dataTablesbootstrap5.min.css')); ?>">

</head>

<body>
    <header>
        <?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <h3 class="text-center"><?php echo $__env->yieldContent('h3', 'Contacts'); ?></h3>
    </header>

    <main>
        <div class="m-3">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>




    <?php echo $__env->make('layouts.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script
  src="<?php echo e(asset('assets/js/jquery-3.7.1.min.js')); ?>"integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('assets/js/bs5.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/faall.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/dataTables.bootstrap5.min.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH D:\xampp\htdocs\php\laravel\FacultadAutoDidacta\ContactsListWithLaravel10\resources\views/layouts/base.blade.php ENDPATH**/ ?>