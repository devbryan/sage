<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <?php echo e(the_field('home_section_head')); ?> <br>
    <?php echo e(the_field('home_secction_desc')); ?> <br>
    <img src=<?php echo e(the_field("home_section_bg_image")); ?> alt="semple image" /> <br>

    <?php echo do_shortcode('[contact-form-7 id="94" title="Contact form 1"]'); ?>


  <?php endwhile; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>