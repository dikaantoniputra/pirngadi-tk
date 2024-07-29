<!DOCTYPE html>
<html lang="en-US" class="no-js">



@stack('before-style')
@include('landing.include.head')
@stack('after-style')

<body id="top">
    <!-- Preloader -->
    <div id="preloader">
       <div class="container h-100">
          <div class="row h-100 justify-content-center align-items-center">
             <div class="preloader-logo">
                <!-- spinner -->
                <div class="spinner">
                   <div class="dot1"></div>
                   <div class="dot2"></div>
                </div>
             </div>
             <!--/preloader logo -->
          </div>
          <!--/row -->
       </div>
       <!--/container -->
    </div>

            @include('landing.include.nav')
            @yield('content')
            <svg version="1.1" id="footer-divider"  class="secondary" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 1440 126" xml:space="preserve" preserveAspectRatio="none slice">
            <path class="st0" d="M685.6,38.8C418.7-11.1,170.2,9.9,0,30v96h1440V30C1252.7,52.2,1010,99.4,685.6,38.8z"/>
         </svg>        
            @include('landing.include.footer')
           
         


    @stack('before-script')
    @include('landing.include.script')
    @stack('after-script')
    

</body>

<!-- Mirrored from max-themes.net/demos/kingster/college/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2024 00:55:04 GMT -->
</html>
