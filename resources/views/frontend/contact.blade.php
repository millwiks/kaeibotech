@extends('frontend.main_master')
@section('main')


<div class="contact">
    <div class="container">
       <div class="row">
          <div class="col-md-12">
             <div class="titlepage">
                <h2>Contact Now</h2>
             </div>
          </div>
       </div>
       <div class="row">
          <div class="col-md-10 offset-md-1">
            
             <form method="post" action="{{ route('store.message') }}" class="main_form">
                @csrf
                <div class="row">
                   <div class="col-md-12 ">
                      <input name="name" class="contactus" placeholder="Name" type="text" > 
                   </div>
                   <div class="col-md-12">
                      <input name="email" class="contactus" placeholder="Email" type="email" > 
                   </div>
                   <div class="col-md-12">
                      <input name="phone" class="contactus" placeholder="Phone Number +" type="text" >                          
                   </div>
                   
                   <div class="col-md-12 ">

                    <input name="subject" class="contactus" placeholder="Subject/Product Required" type="text" > 
                 </div>
                   
                   <div class="col-md-12">
                      <textarea name="message"  class="textarea" placeholder="Message" ></textarea>
                   </div>
                   <div class="col-md-12">
                      <button class="send_btn">Send</button>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </div>

@endsection