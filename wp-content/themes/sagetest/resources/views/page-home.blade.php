@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

    {{ the_field('home_section_head') }} <br>
    {{ the_field('home_secction_desc') }} <br>
    <img src={{ the_field("home_section_bg_image") }} alt="semple image" /> <br>

    {!! do_shortcode('[contact-form-7 id="94" title="Contact form 1"]') !!}

  @endwhile
@endsection