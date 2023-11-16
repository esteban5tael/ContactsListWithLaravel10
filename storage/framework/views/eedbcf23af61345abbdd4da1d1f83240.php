<div class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark rounded m-2">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('assets/img/addressico.png')); ?>"
                    width="32px" alt="Address Icon"></span></a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo e(route('index')); ?>"
                            aria-current="page"><?php echo e(__('Home')); ?></a>
                    </li>
                    
                    <?php if(Route::has('login')): ?>
                        <?php if(auth()->guard()->check()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Dashboard')); ?></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">Options</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownId">
                                    <a class="dropdown-item"
                                        href="<?php echo e(route('categories.index')); ?>"><?php echo e(__('Catetories')); ?></a>
                                    <a class="dropdown-item" href="<?php echo e(route('contacts.index')); ?>"><?php echo e(__('Contacts')); ?></a>
                                </div>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Log in')); ?></a>
                            </li>


                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    


                </ul>
            </div>
        </div>
    </nav>
</div>
<?php /**PATH D:\xampp\htdocs\php\laravel\FacultadAutoDidacta\ContactsListWithLaravel10\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>