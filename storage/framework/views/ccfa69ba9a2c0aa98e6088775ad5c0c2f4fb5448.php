 <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <?php if(! Auth::guest()): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo e(Gravatar::get($user->email)); ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p><?php echo e(Auth::user()->name); ?></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo e(trans('adminlte_lang::message.online')); ?></a>
                </div>
            </div>
        <?php endif; ?>
<<<<<<< HEAD

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">            
            <li
            <?php if($page == 'dashboard'): ?>
=======
                <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li 
            <?php if($page == 'dasboard'): ?>
>>>>>>> 7e40f8251ee92d9161caad6f025e88bbd7ff5386
            <?php echo 'class="active"'; ?>

            <?php endif; ?>
            >
<<<<<<< HEAD
                <a href="<?php echo e(url('home')); ?>"><i class='fa fa-home'></i> <span>Dashboard</span></a>
=======
                ><a href="<?php echo e(url('home')); ?>"><i class='fa fa-home'></i> <span>Dasboard</span></a>
>>>>>>> 7e40f8251ee92d9161caad6f025e88bbd7ff5386
            </li>
            <?php if(Auth::user()->role == 'karyawan'): ?>
            <?php echo $__env->make('sidebar_karyawan', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php elseif(Auth::user()->role == 'mahasiswa'): ?>
            <?php echo $__env->make('sidebar_mahasiswa', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php else: ?>
            <?php echo $__env->make('sidebar_dosen', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>
<<<<<<< HEAD
                  
=======
>>>>>>> 7e40f8251ee92d9161caad6f025e88bbd7ff5386
        </ul>
    </section>
</aside>
