<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeSlider;
use App\Helpers\FileUploadHelper;

class HomeSliderController extends Controller
{
    //
    public function index()
    {
        $sliders = HomeSlider::all();
        return view('cms.home_sliders.index',compact('sliders'));
    }

    public function create()
    {
        return view('cms.home_sliders.create');
    }

    public function store(Request $request)
    {
        $background = FileUploadHelper::uploadFile($request, 'background', 'assets/sliders/');
      

        HomeSlider::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'url' => $request->url,
            'background' => $background,
        
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('homeSliderCms');
    }

    public function edit($id)
    {
        $slider = HomeSlider::find($id);
        return view('cms.home_sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = HomeSlider::find($id);

        $background = FileUploadHelper::uploadFile($request, 'background', 'assets/sliders/');
        if($background!=null)
            $slider->update(['background' => $background]);

        

        $slider->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'link' => $request->link,
            'url' => $request->url,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->route('homeSliderCms');
    }

    public function delete($id)
    {
        HomeSlider::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('homeSliderCms');
    }
}
