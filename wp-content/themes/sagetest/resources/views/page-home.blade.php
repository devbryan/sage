@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <!-- @include('partials.page-header') -->


    <!-- HERO-8
			============================================= -->	
			<section id="hero-8" class="bg-fixed hero-section division" style="background-image:url({{ the_field('home_sec_img') }})">
				<div class="container">						
					<div class="row">


						<!-- HERO TEXT -->	
						<div class="col-md-10 offset-md-1">
							<div class="hero-txt white-color text-center">
							
					 			<!-- Title -->	
								<h2 class="h2-xs wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                {{ the_field('sec_home_head') }}
              </h2>	

								<!-- Text -->
								<p class="p-md wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                {{ the_field('sec_home_desc') }}	
								</p>

								<!-- HERO REGISTER FORM -->
                <div class="form-holder mb-30 text-center wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                {!! do_shortcode('[contact-form-7 id="94" title="Contact form 1" html_class="row quick-form"]') !!}
            	
    </div>
    </div>
    </div>
    <!-- END HERO TEXT -->


    </div>
    <!-- End row -->
    </div>
    <!-- End container -->
    </section>
    <!-- END HERO-8 -->


	<section class="content-section py-md-5 py-5 service-section">
			<div class="container">
				<div class="common-large-heading text-center">
					<h1 class="wow bounceInDown mb-5">{{ the_field('sec_two_head') }}</h1>
				</div>
				<div class="row">
					<div class="col-12 col-md-4">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                  <div class="single-icon">
                      <img src={{ get_template_directory_uri()."/assets/images/icon.svg" }}  width="80" class="img-fluid" alt="" />
                  </div>
                  <h4 class="py-3">{{ the_field('sec_two_cont_one_head') }}</h4>
                  <p>{{ the_field('sec_two_cont_one_desc') }}</p>
              </div>
				</div>
				<div class="col-12 col-md-4">
              <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                  <div class="single-icon">
                      <img src={{ get_template_directory_uri()."/assets/images/notebook.svg" }} width="80" class="img-fluid" alt="" />
                  </div>
                  <h4 class="py-3">{{ the_field('sec_two_cont_two_head') }}</h4>
                  <p>{{ the_field('sec_two_cont_two_desc') }}</p>
              </div>
				</div>
				<div class="col-12 col-md-4">
              <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                <div class="single-icon">
                    <img src={{ get_template_directory_uri()."/assets/images/icon.svg" }} width="80" class="img-fluid" alt="" />
                </div>
                <h4 class="py-3">{{ the_field('sec_two_cont_three_head') }}</h4>
                <p>{{ the_field('sec_two_cont_three_desc') }}</p>
              </div>
				</div>
			</div>
		</section>
    <!-- VIDEO-2
			============================================= -->
    <section id="video-2" class="bg-scroll video-section division" style="background-image:url({{ the_field('video_sec_bg_img') }})">
        <div class="container white-color">
            <div class="row">


                <!-- VIDEO CONTENT -->
                <div class="col-md-8 offset-md-2 text-center">

                    <!-- Change the link HERE!!! -->
                    <a class="video-popup2" href="{{ the_field('video_link') }}">
                        <div class="video-btn play-icon-theme">
                            <div class="video-block-wrapper">
                                <svg class="svg-inline--fa fa-play fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="play" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M424.4 214.7L72.4 6.6C43.8-10.3 0 6.1 0 47.9V464c0 37.5 40.7 60.1 72.4 41.3l352-208c31.4-18.5 31.5-64.1 0-82.6z"></path></svg>
                                <!-- <i class="fas fa-play"></i> -->
                            </div>
                        </div>
                    </a>

                    <!-- Title -->
                    <h3 class="h3-md">{{ the_field('video_sec_head') }}</h3>

                    <!-- Text -->
                    <p class="p-lg">{{ the_field('video_sec_disc') }}</p>

                    <!-- Button  -->
                    <a href="{{ the_field('video_sec_btn_link') }}" class="btn btn-blur tra-hover">{{ the_field('video_sec_btn_txt') }}</a>

                </div>
                <!-- END VIDEO CONTENT -->


            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>
    <!-- END VIDEO-2 -->

    <!-- CALL TO ACTION-4
			============================================= -->
    <section id="cta-4" class="bg-lightdark cta-section division">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION TEXT -->
                <div class="col-lg-8">
                    <div class="cta-txt">

                        <!-- Title -->
                        <h4 class="h4-lg">{{ the_field('pro_sec_head') }}</h4>

                        <!-- Text -->
                        <p class="p-md">{{ the_field('pro_sec_desc') }}</p>

                    </div>
                </div>


                <!-- CALL TO ACTION BUTTON -->
                <div class="col-lg-3 offset-lg-1">
                    <div class="cta-btn text-right">
                        <a href="{{ the_field('pro_sec_btn_link') }}" class="btn btn-md btn-theme tra-hover">{{ the_field('pro_sec_btn_txt') }}</a>
                    </div>
                </div>


            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </section>    

    <!-- END CALL TO ACTION-4 -->
  @endwhile
@endsection