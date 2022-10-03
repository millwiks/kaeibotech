@php
$homeslide = App\Models\HomeSlide::find(1);

@endphp
<!-- banner2 -->
 <div class="three_box">
         <div class="container">
         <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>SHOP NOW BELOW</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="box_text">
                  
                     <i><a href="product.html"><img src="{{ asset('frontend/assets/images/thr.png')}}" alt="#"/></a></i>
                     <h3>High Voltage Cables</h3>
                     <p>{{ $homeslide->description1 }} </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><a href="product.html"><img src="{{ asset('frontend/assets/images/thr1.png')}}" alt="#"/></a></i>
                     <h3>Power Switches</h3>
                     <p>{{ $homeslide->description2 }} </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><a href="product.html"><img src="{{ asset('frontend/assets/images/thr2.png')}}" alt="#"/></a></i>
                     <h3>Lighting Bulbs</h3>
                     <p>{{ $homeslide->description3 }} </p>
                  </div>
               </div>
            </div>
        </div>
    </div>
<!-- end banner2 -->     