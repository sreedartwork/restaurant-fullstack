{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <!-- Fonts -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    </head>
    <body>
    <section id="app-layout">
   @include('includes.side-menu')
    <div class="welcome-jumbo">
      <div class="status">NEW</div>
      <h1>Billy Burger</h1>
      <img src="/img/hamburger-and-fries-png-4.png" class="burger-fries">
    </div>
  </section>
   @yield('content')
 
    </body>
</html> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags')
    </head>
    <body>
        <section id="app-layout">
    @include('includes.side-menu')
    <div class="welcome-jumbo">
      {{-- <div class="status">NEW</div> --}}
      <h1>TNT HOT WINGS AND BBQ</h1>
      <img src="/img/clipart-restaurant-restaurant-logo-5.png" class="top-food">
    </div>
  </section>
  @yield('content')

  <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

  <script>
    let slides = $('.sliding-system a.slide').length;
    let maxSlides;
    let moveTotal;
    let currentSlide = 0;

    $(window).resize(function(){
      currentSlide = 0;
      $('.sliding-system').css('transform', 'translate3d(-0%, 0,0');
    })
    function desktopSlider(){
      if(a.matches){
        maxSlides = Math.ceil((slides * 20) / 100);
        moveTotal = 100;
        // Right Button
        $('.right-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide < maxSlides){
            currentSlide += 100;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
        // Left Button
        $('.left-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide != 0){
            currentSlide -= 100;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
      }
    }
    var a = window.matchMedia("(min-width: 998px)")
    desktopSlider(a);
    a.addListener(desktopSlider);

    function tabletSlider(){
      if(b.matches){
        maxSlides = Math.ceil((slides * 50) / 100);
        moveTotal = 100;
        // Right Button
        $('.right-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide < ((maxSlides * 100) - 100)){
            currentSlide += 50;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
        // Left Button
        $('.left-btn').on('click', () => {
          console.log('clicked right btn')
          if(currentSlide != 0){
            currentSlide -= 50;
            $('.sliding-system').css('transform', `translate3d(-${currentSlide}%, 0, 0)`);
          }
        });
      }
    }
    var b = window.matchMedia("(min-width: 768px) and (max-width: 997px");
    console.log(b)
    tabletSlider(b);
    b.addListener(tabletSlider);

  </script>
    </body>
</html>
