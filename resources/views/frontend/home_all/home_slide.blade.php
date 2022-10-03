@php
$homeslide = App\Models\HomeSlide::find(1);

@endphp
<!-- banner2 -->
 <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="{{ asset('frontend/assets/images/thr.png')}}" alt="#"/></i>
                     <h3>Computer</h3>
                     <p>{{ $homeslide->description1 }} </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="{{ asset('frontend/assets/images/thr1.png')}}" alt="#"/></i>
                     <h3>Laptop</h3>
                     <p>{{ $homeslide->description2 }} </p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <i><img src="{{ asset('frontend/assets/images/thr2.png')}}" alt="#"/></i>
                     <h3>Tablet</h3>
                     <p>{{ $homeslide->description3 }} </p>
                  </div>
               </div>
            </div>
        </div>
    </div>
<!-- end banner2 -->     