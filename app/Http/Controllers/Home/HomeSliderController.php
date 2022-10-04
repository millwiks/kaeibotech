<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;


class HomeSliderController extends Controller
{
    public function HomeSlider(){

        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeslide'));

     } // End Method 

     public function HomeHtml(){

        return view('frontend.index');

    }// End Method

     public function LoginHtml(){

        return view('auth.login');

    }// End Method

    public function UpdateSlider(Request $request){

        $slide_id = $request->id;

        HomeSlide::findOrFail($slide_id)->update([
            'description1' => $request->description1,
            'description2' => $request->description2,
            'description3' => $request->description3,
            ]); 

            $notification = array(
                'message' => 'Home Tabs Updated  Successfully', 
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);
    }// End Method
}
