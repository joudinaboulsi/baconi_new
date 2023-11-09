<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Helpers\FileUploadHelper;

class ServiceController extends Controller
{
    //

    public function index()
    {
        $service = Service::find(1);
        return view('cms.service',compact('service'));
    }

    public function store(Request $request)
    {
        $service = Service::find(1);

     

        $video = FileUploadHelper::uploadFile($request, 'video', 'assets/service/');
        if($video!=null)
            $service->update(['video' => $video]);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/service/');
        if($image!=null)
            $service->update(['image' => $image]);


        $icon_tab2 = FileUploadHelper::uploadFile($request, 'icon_tab2', 'assets/service/');
        if($icon_tab2!=null)
            $service->update(['icon_tab2' => $icon_tab2]);

        $image_tab2 = FileUploadHelper::uploadFile($request, 'image_tab2', 'assets/service/');
        if($image_tab2!=null)
        $service->update(['image_tab2' => $image_tab2]);

        $icon_tab3 = FileUploadHelper::uploadFile($request, 'icon_tab3', 'assets/service/');
        if($icon_tab3!=null)
        $service->update(['icon_tab3' => $icon_tab3]);

        $image_tab3 = FileUploadHelper::uploadFile($request, 'image_tab3', 'assets/service/');
        if($image_tab3!=null)
        $service->update(['image_tab3' => $image_tab3]);

        $service->update([
            'subtitle_page' => $request->subtitle_page,
            'title_page' => $request->title_page,
            'title_section1' => $request->title_section1,
            'subtitle_section1' => $request->subtitle_section1,
            'text_section1' => $request->text_section1,
            'link_section1' => $request->link_section1,
            'url_section1' => $request->url_section1,
            'alt_image' => $request->alt_image,
            'title_section2' => $request->title_section2,
            'title_tab1' => $request->title_tab1,
            'title_tab2' => $request->title_tab2,
            'title_tab3' => $request->title_tab3,
            'small_title_tab2' => $request->small_title_tab2,
            'text_tab2' => $request->text_tab2,
            'text2_tab2' => $request->text2_tab2,
            'small_title_tab3' => $request->small_title_tab3,
            'text_tab3' => $request->text_tab3,
            'text2_tab3' => $request->text2_tab3,
            'text_tab1' => $request->text_tab1,
            
            'alt_image_tab3' => $request->alt_image_tab3,
            'alt_image_tab2' => $request->alt_image_tab2,
            


        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('serviceCms');
    }
}
