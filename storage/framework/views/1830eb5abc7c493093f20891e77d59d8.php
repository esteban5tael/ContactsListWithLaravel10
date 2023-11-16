

<?php $__env->startSection('title'); ?>
    <?php echo e(config('app.name')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h3'); ?>
    <?php echo e(__('Cateogries')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row  m-2">
        <div class="card">
            <div class="card-body">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3><?php echo e(__('Categories')); ?></h3>
                            <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary"><i
                                    class="fa-solid fa-plus"></i>&nbsp; <?php echo e(__('Create')); ?> <?php echo e(__('Categories')); ?></a>
                            <hr>
                        </div>
                    </div>
                    
                    <?php if(session('message')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo e(session('message')); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php endif; ?>
                    


                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-sm table-bordered dataTable no-footer table-hover" id="table">
                                <thead>
                                    <th><?php echo e(__('Actions')); ?></th>
                                    <th><?php echo e(__('Name')); ?></th>
                                    <th><?php echo e(__('Description')); ?></th>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <a href="<?php echo e(route('categories.edit', $category)); ?>"
                                                    class="btn btn-warning btn-sm"><?php echo e(__('Edit')); ?></a>
                                                <form action="<?php echo e(route('categories.destroy', $category)); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button class="btn btn-danger btn-sm m-1"
                                                        onclick="return confirm('¿Are You Sure You Want To Delete This Record?')"><?php echo e(__('Delete')); ?></button>
                                                </form>

                                            </td>
                                            <td><?php echo e($category->name); ?></td>
                                            <td><?php echo e($category->description); ?></td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\php\laravel\FacultadAutoDidacta\ContactsListWithLaravel10\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>