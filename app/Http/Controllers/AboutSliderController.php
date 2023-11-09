<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutSlider;
use App\Helpers\FileUploadHelper;


class AboutSliderController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
  {
    $sliders = AboutSlider::all();
    return view('cms.about_sliders.index',compact('sliders'));
  }

  public function create()
  {
    return view('cms.about_sliders.create');
  }

  public function store(Request $request)
  {
      $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
    

      AboutSlider::create([
          'image' => $image,
          'alt_image' => $request->alt_image,
      ]);

      toastr()->success('Data has been saved successfully!');
      return redirect()->route('aboutSliderCms');
  }


  public function edit($id)
  {
    $slider = AboutSlider::find($id);
    return view('cms.about_sliders.edit',compact('slider'));
  }

  public function update(Request $request, $id)
  {
      $slider = AboutSlider::find($id);

      $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
      if($image!=null)
          $slider->update(['image' => $image]);

        $slider->update([
        
          'alt_image' => $request->alt_image,
      ]);

      toastr()->success('Data has been saved successfully!');
      return redirect()->route('aboutSliderCms');
  }

  public function delete($id)
  {
      AboutSlider::find($id)->delete();
      toastr()->success('Data has been deleted successfully!');
      return redirect()->route('aboutSliderCms');
  }


}
