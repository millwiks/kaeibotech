<section class="banner_main">
 <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
   @php
   $portfolio = App\Models\Portfolio::latest()->get();
  @endphp
  @foreach($portfolio as $item)
  <div>
     <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>   
    @endforeach 
     <div class="carousel-inner"> 
       <div class="carousel-item active">
         <div class="container">
          <div class="carousel-item active">
            <div class="carousel-caption">
               <div class="row">
                  <div class="col-md-6">
                     <div class="text-bg">
                        <span>{{$item->  portfolio_tittle}}</span>
                        <h1></h1>
                        <p> {{$item->  portfolio_description}} </p>
                        <a href="#">Buy Now </a> <a href="contact.html">Contact </a>
                     </div>
                  </div>                
                  <div class="col-md-6">
                      <div class="text_img">                    
                        <figure><img src="{{ asset($item->portfolio_image) }}" alt="#"/></figure>                     
                     </div>                  
                  </div>
               </div>
            </div>
          </div>         
         </div>
      </div>  
    </div>
   </div>
    
     <a class="carousel-control-prev" role="button" data-bs-target="#carouselExampleIndicators"  data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        
     <i class=" " aria-hidden="true"></i>
     </a>
     <a class="carousel-control-next" role="button" data-bs-target="#carouselExampleIndicators"  data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
        
     <i class=" " aria-hidden="true"></i>
     </a>
  </div>
  
</section>