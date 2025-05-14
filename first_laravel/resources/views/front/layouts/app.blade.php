
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from freshcart.codescandy.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 17:26:38 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta content="Codescandy" name="author" />
      <title>@yield("title")</title>

    @include("front.includes.css")


   </head>

   <body>
    @include("front.includes.navbar")

    @yield("main_content")

      <!-- Modal -->

      <!-- footer -->

      @include("front.includes.footer")
      <!-- Javascript-->

      <!-- Libs JS -->
      <!-- <script src="./assets/libs/jquery/dist/jquery.min.js"></script> -->
      <script src="{{ asset('frontend/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>

      <!-- Theme JS -->
      <script src="{{ asset('frontend/assets/js/theme.min.js') }}"></script>

      <script src="{{ asset('frontend/assets/js/vendors/jquery.min.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/vendors/countdown.js') }}"></script>
      <script src="{{ asset("frontend/assets/libs/slick-carousel/slick/slick.min.js") }}"></script>
      <script src="{{ asset('frontend/assets/js/vendors/slick-slider.js') }}"></script>
      <script src="{{ asset("frontend/assets/libs/tiny-slider/dist/min/tiny-slider.js") }}"></script>
      <script src="{{ asset('frontend/assets/js/vendors/tns-slider.js') }}"></script>
      <script src="{{ asset('frontend/assets/js/vendors/zoom.js') }}"></script>

      @stack("js")
   </body>

<!-- Mirrored from freshcart.codescandy.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 17:27:17 GMT -->
</html>
