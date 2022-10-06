<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;
use Intervention\Image\Facades\Image;


class PortfolioController extends Controller
{
    public function AllPortfolio(){

        $portfolio = Portfolio::latest()->get();
        return view('admin.protfolio.protfolio_all',compact('portfolio'));
    } // End Method


    public function AddPortfolio(){
        return view('admin.protfolio.protfolio_add');
    } // End Method


    public function StorePortfolio(Request $request){

        $request->validate([
            'portfolio_tittle' => 'required',
            'portfolio_image' => 'required',
            'portfolio_description' => 'required',
            

        ],[

            
            'portfolio_tittle.required' => 'Home Tittle is Required',
            'portfolio_description.required' => 'Home Description is Required',
        ]);
        

        $image = $request->file('portfolio_image');

        
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(696,278)->save('upload/portfolio/'.$name_gen);
            $save_url = 'upload/portfolio/'.$name_gen;

            Portfolio::insert([
                'portfolio_tittle' => $request->portfolio_tittle,
                'portfolio_image' => $save_url,
                'portfolio_description' => $request->portfolio_description,
                
                

            ]); 
            $notification = array(
            'message' => 'Scroll Inserted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('all.portfolio')->with($notification);


    }// End Method

    public function EditMultiImage($id){

        $multiImage = Portfolio::findOrFail($id);
        return view('admin.about_page.edit_multi_image',compact('multiImage'));


    }// End Method



    public function UpdateMultiImage(Request $request){

        $multi_image_id = $request->id;

     if ($request->file('multi_image')) {
         $image = $request->file('multi_image');
         $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

         Image::make($image)->resize(220,220)->save('upload/multi/'.$name_gen);
         $save_url = 'upload/multi/'.$name_gen;

         Portfolio::findOrFail($multi_image_id)->update([

             'portfolio_image' => $save_url,

         ]); 
         $notification = array(
         'message' => 'Scroll Image Updated Successfully', 
         'alert-type' => 'success'
     );

     return redirect()->route('all.portfolio')->with($notification);

     }

  }// End Method 



  public function DeleteMultiImage($id){

    $multi = Portfolio::findOrFail($id);
    $img = $multi->portfolio_image; //access field data
    unlink($img);                  //passing

    Portfolio::findOrFail($id)->delete();

     $notification = array(
        'message' => 'Scroll Deleted Successfully', 
        'alert-type' => 'success'
    );

    return redirect()->back()->with($notification);



 }// End Method 

}