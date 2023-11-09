<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\SliderCompany;
use App\Helpers\FileUploadHelper;

class SliderCompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

  public function index()
  {
    $sliders = SliderCompany::all();
    return view('cms.slider_companies.index',compact('sliders'));
  }

  public function create()
  {
    return view('cms.slider_companies.create');
  }

  public function store(Request $request)
  {
      $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
    

      SliderCompany::create([
          'image' => $image,
         
      ]);

      toastr()->success('Data has been saved successfully!');
      return redirect()->route('companySliderCms');
  }


  public function edit($id)
  {
    $slider = SliderCompany::find($id);
    return view('cms.slider_companies.edit',compact('slider'));
  }

  public function update(Request $request, $id)
  {
      $slider = SliderCompany::find($id);

      $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
      if($image!=null)
          $slider->update(['image' => $image]);

       
      toastr()->success('Data has been saved successfully!');
      return redirect()->route('companySliderCms');
  }

  public function delete($id)
  {
      SliderCompany::find($id)->delete();
      toastr()->success('Data has been deleted successfully!');
      return redirect()->route('companySliderCms');
  }
}
