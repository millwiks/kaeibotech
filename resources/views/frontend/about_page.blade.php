

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
      <title>cla</title>
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
      <header>
         <!-- header inner -->
         @include('frontend.body.header')

      <!-- end header inner -->
      <!-- end header -->
      <!-- about section -->

                  <!-- about-area -->
<section class="about about__style__two">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="about__image">
    <img src="{{ $aboutpage->about_image }}" alt="">
</div>
</div>
<div class="col-lg-6">
<div class="about__content">
    <div class="section__title">
        <span class="sub-title">01 - About US</span>
        <h2 class="title">{{ $aboutpage->tittle }}</h2>
    </div>
    <div class="about__exp">
        <div class="about__exp__icon">
            <img src="{{ asset('frontend/assets/img/icons/about_icon.png') }} " alt="">
        </div>
        <div class="about__exp__content">
            <p><span>{{ $aboutpage->short_tittle }}</span> </p>
        </div>
    </div>
    <p class="desc">{{ $aboutpage->short_description }}</p>
    
</div>
</div>
</div>
<div class="row">
<div class="col-12">
<div class="about__info__wrap">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button"
                role="tab" aria-controls="about" aria-selected="true">Mission</button>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
            <p class="desc">

{!! $aboutpage->long_description !!}

             </p>
                </li>
            </ul>
        </div>

    </div>
</div>
</div>
</div>
</div>
</section>
<!-- about-area-end -->

      
      <!-- end about section -->
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
   </body>
</html>

