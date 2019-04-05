<header class="banner">
  <div class="container">
    <div class="sitelogo">
    
    @php $custom_logo_id = get_theme_mod( 'custom_logo' ); @endphp
    @php $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' ); @endphp
    <img src='{{ esc_url( $custom_logo_url ) }}' alt="">';
    <h1>{!! App::title() !!}</h1>
    @php  

      $app_class = new App();
      echo $app_class->siteName();

    @endphp

    </div>
    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>    
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
