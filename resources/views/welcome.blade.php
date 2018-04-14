@extends('layouts.app')


@section('content')

@if(isset(Auth::user()->name))
<script type="text/javascript">
    window.location = "{{ url('/dash') }}";//here double curly bracket
</script>
@endif

<style type="text/css">
.navbar {
  background-color: transparent;
  transition: background-color 300ms ; 
}
.navbar.scrolled {
  background-color: white !important;
  transition: background-color 300ms ease-in-out;
}

.navbar.scrolled .nav-link {
  color:black;
}

.navbar.scrolled .navbar-brand {
  color: black;
}
</style>



<div class="jumbotron d-flex flex-row align-items-center" style="height:100vh; margin-bottom: 0px; color: white; background-image: url('https://images.unsplash.com/photo-1518466287196-1ba82e3bb69b?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5178806447c0b33ac9a15a305e0d5cdf&auto=format&fit=crop&w=1500&q=80'); background-size: cover; background-repeat: no-repeat; background-position: center; border-radius: 0px; padding: 0px!important;">
  <div class="container" style="">
    <h1 class="display-4" style="color: white;">Timely Social</h1>
    <p class="lead">An Open Source, Secure and Private Social Network.</p>
    <a href="#get_started" class="btn btn-outline-info">Get Started</a>
  </div>
</div>

@endsection


@section('js_scripts')

<script>
$(function () {
  $(document).scroll(function () {
      var $nav = $(".navbar");
      $nav.toggleClass('scrolled', $(this).scrollTop()  > $nav.height());
      if($nav.hasClass('scrolled')) {
        $nav.addClass('navbar-light');
        $nav.removeClass('navbar-dark');
      } else {
        $nav.removeClass('navbar-light');
      $nav.addClass('navbar-dark');
      }
    });
});

    </script>
@endsection