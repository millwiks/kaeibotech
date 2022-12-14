

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>KAEIBOELECTRONICS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      
      
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('frontend/assets/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('frontend/assets/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      @include('frontend.body.header')

      <!-- end header inner -->
      <!-- end header -->
  <main>
   @yield('main')


  </main>
      <!--  footer -->
      @include('frontend.body.footer')
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/popper.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{ asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{ asset('frontend/assets/js/custom.js')}}"></script>

      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >


      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

      <script>
@if(Session::has('message'))
var type = "{{ Session::get('alert-type','info') }}"
switch(type){
  case 'info':
  toastr.info(" {{ Session::get('message') }} ");
  break;
  case 'success':
  toastr.success(" {{ Session::get('message') }} ");
  break;
  case 'warning':
  toastr.warning(" {{ Session::get('message') }} ");
  break;
  case 'error':
  toastr.error(" {{ Session::get('message') }} ");
  break; 
}
@endif 
</script>

   </body>
</html>

