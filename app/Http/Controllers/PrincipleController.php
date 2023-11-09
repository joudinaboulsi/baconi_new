<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\PrincipleSlider;

class PrincipleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
  {
    $sliders = PrincipleSlider::all();
    return view('cms.principles.index',compact('sliders'));
  }

  public function create()
  {
    return view('cms.principles.create');
  }

  public function store(Request $request)
  {
      $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
    

      PrincipleSlider::create([
          'image' => $image,
          'alt_image' => $request->alt_image,
      ]);

      toastr()->success('Data has been saved successfully!');
      return redirect()->route('principleCms');
  }


  public function edit($id)
  {
    $slider = PrincipleSlider::find($id);
    return view('cms.principles.edit',compact('slider'));
  }

  public function update(Request $request, $id)
  {
      $slider = PrincipleSlider::find($id);

      $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
      if($image!=null)
          $slider->update(['image' => $image]);

        $slider->update([
        
          'alt_image' => $request->alt_image,
      ]);

      toastr()->success('Data has been saved successfully!');
      return redirect()->route('principleCms');
  }

  public function delete($id)
  {
      PrincipleSlider::find($id)->delete();
      toastr()->success('Data has been deleted successfully!');
      return redirect()->route('principleCms');
  }
}
