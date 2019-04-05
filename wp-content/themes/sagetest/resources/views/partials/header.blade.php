<!-- <header class="banner">
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
</header> -->



<body cz-shortcut-listen="true">
    <!-- PRELOADER SPINNER
		============================================= -->
    <div id="loader-wrapper" style="display: none;">
        <div id="loader" style="display: none;">
            <div class="cssload-spinner"></div>
        </div>
    </div>
    <div id="page" class="page">
        <!-- HEADER
			============================================= -->
        <header id="header" class="header">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-tra hover-menu">
                <div class="container">


                    <!-- LOGO IMAGE -->
                    <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 268 x 60 pixels) -->
                    @php $custom_logo_id = get_theme_mod( 'custom_logo' ); @endphp
                    @php $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' ); @endphp
                    <!-- <img src='{{ esc_url( $custom_logo_url ) }}' alt="">'; -->

                    <a href="#" class="navbar-brand logo-black"><img src="{{ esc_url( $custom_logo_url ) }}" width="100" height="100" alt="header-logo"></a>
                    <a href="#" class="navbar-brand logo-white"><img src="{{ esc_url( $custom_logo_url ) }}" width="100" height="100" alt="header-logo"></a>


                    <!-- Responsive Menu Button -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				   		 	<span class="navbar-bar-icon"><svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-bars"></i> --></span>
	
					</div>	  <!-- End container -->
				</nav>	   <!-- End navbar -->
			</header>	<!-- END HEADER -->

