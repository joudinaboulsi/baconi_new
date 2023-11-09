<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\ServiceTabOne;


class ServiceTabOneController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $services = ServiceTabOne::all(); 
        return view('cms.service_tabone.index',compact('services'));
    }

    public function create()
    {
        return view('cms.service_tabone.create');
    }

    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
        $icon = FileUploadHelper::uploadFile($request, 'icon', 'assets/sliders/');
      
        ServiceTabOne::create([
            'image' => $image,
            'icon' => $icon,
            'alt_image' => $request->alt_image,
            'title1' => $request->title1,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
            'text4' => $request->text4,
        ]);
  
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('tabOneCms');
    }

    public function edit($id)
    {
        $service = ServiceTabOne::find($id);
        return view('cms.service_tabone.edit',compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = ServiceTabOne::find($id);
  
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
        if($image!=null)
            $service->update(['image' => $image]);

        $icon = FileUploadHelper::uploadFile($request, 'icon', 'assets/sliders/');
        if($icon!=null)
            $service->update(['icon' => $icon]);
  
          $service->update([
    
            'title1' => $request->title1,
            'text1' => $request->text1,
            'text2' => $request->text2,
            'text3' => $request->text3,
            'text4' => $request->text4,
            'alt_image' => $request->alt_image,
        ]);
  
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('tabOneCms');
    }
  
    public function delete($id)
    {
        ServiceTabOne::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('tabOneCms');
    }


}
