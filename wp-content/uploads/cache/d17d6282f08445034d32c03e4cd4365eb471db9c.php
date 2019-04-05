<header class="banner">
  <div class="container">
    <div class="sitelogo">
    
    <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
    <?php $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' ); ?>
    <img src='<?php echo e(esc_url( $custom_logo_url )); ?>' alt="">';
    <h1><?php echo App::title(); ?></h1>
    <?php  

      $app_class = new App();
      echo $app_class->siteName();

    ?>

    </div>
    <a class="brand" href="<?php echo e(home_url('/')); ?>"><?php echo e(get_bloginfo('name', 'display')); ?></a>    
    <nav class="nav-primary">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']); ?>

      <?php endif; ?>
    </nav>
  </div>
</header>
