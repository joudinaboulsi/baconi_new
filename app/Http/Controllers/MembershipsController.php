<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\MembershipSlider;

class MembershipsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
      $sliders = MembershipSlider::all();
      return view('cms.memberships.index',compact('sliders'));
    }
  
    public function create()
    {
      return view('cms.memberships.create');
    }
  
    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
      
  
        MembershipSlider::create([
            'image' => $image,
            'alt_image' => $request->alt_image,
        ]);
  
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('membershipCms');
    }
  
  
    public function edit($id)
    {
      $slider = MembershipSlider::find($id);
      return view('cms.memberships.edit',compact('slider'));
    }
  
    public function update(Request $request, $id)
    {
        $slider = MembershipSlider::find($id);
  
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
        if($image!=null)
            $slider->update(['image' => $image]);
  
          $slider->update([
          
            'alt_image' => $request->alt_image,
        ]);
  
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('membershipCms');
    }
  
    public function delete($id)
    {
        MembershipSlider::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('membershipCms');
    }
}
