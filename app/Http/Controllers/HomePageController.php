<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomePage;
use App\Helpers\FileUploadHelper;


class HomePageController extends Controller
{
    //
    public function index()
    {
        $home = HomePage::find(1);
        return view('cms.home_page',compact('home'));

    }

    public function store(Request $request)
    {
        // dd($request);
        $home = HomePage::find(1);

        $icon1 = FileUploadHelper::uploadFile($request, 'icon1', 'assets/home/');
        if($icon1!=null)
            $home->update(['icon1' => $icon1]);

        $icon2 = FileUploadHelper::uploadFile($request, 'icon2', 'assets/home/');
        if($icon2!=null)
            $home->update(['icon2' => $icon2]);


        $icon3 = FileUploadHelper::uploadFile($request, 'icon3', 'assets/home/');
        if($icon3!=null)
            $home->update(['icon3' => $icon3]);


        $icon4 = FileUploadHelper::uploadFile($request, 'icon4', 'assets/home/');
        if($icon4!=null)
            $home->update(['icon4' => $icon4]);

        $image_count = FileUploadHelper::uploadFile($request, 'image_count', 'assets/home/');
        if($image_count!=null)
            $home->update(['image_count' => $image_count]);
        
        $logo = FileUploadHelper::uploadFile($request, 'logo', 'assets/home/');
        if($logo!=null)
            $home->update(['logo' => $logo]);

        $image1_service = FileUploadHelper::uploadFile($request, 'image1_service', 'assets/home/');
        if($image1_service!=null)
            $home->update(['image1_service' => $image1_service]);

        $image2_service = FileUploadHelper::uploadFile($request, 'image2_service', 'assets/home/');
        if($image2_service!=null)
            $home->update(['image2_service' => $image2_service]);

        $image3_service = FileUploadHelper::uploadFile($request, 'image3_service', 'assets/home/');
        if($image3_service!=null)
            $home->update(['image3_service' => $image3_service]);

        $image_section1 = FileUploadHelper::uploadFile($request, 'image_section1', 'assets/home/');
        if($image_section1!=null)
            $home->update(['image_section1' => $image_section1]);

        $video = FileUploadHelper::uploadFile($request, 'video', 'assets/home/');
        if($video!=null)
            $home->update(['video' => $video]);



        $company1 = FileUploadHelper::uploadFile($request, 'company1', 'assets/home/');
        if($company1!=null)
            $home->update(['company1' => $company1]);

        $company2 = FileUploadHelper::uploadFile($request, 'company2', 'assets/home/');
        if($company2!=null)
            $home->update(['company2' => $company2]);

        $company3 = FileUploadHelper::uploadFile($request, 'company3', 'assets/home/');
        if($company3!=null)
            $home->update(['company3' => $company3]);

        $company4 = FileUploadHelper::uploadFile($request, 'company4', 'assets/home/');
        if($company4!=null)
            $home->update(['company4' => $company4]);
            
                
        $home->update([

            'title1' => $request->title1,
            'subtitle1' => $request->subtitle1,
            'title2' => $request->title2,
            'subtitle2' => $request->subtitle2,
            'title3' => $request->title3,
            'subtitle3' => $request->subtitle3,
            'title4' => $request->title4,
            'subtitle4' => $request->subtitle4,
            'counter1' => $request->counter1,
            'title1_count' => $request->title1_count,
            'subtitle1_count' => $request->subtitle1_count,

            'years' => $request->years,
            'counter2' => $request->counter2,
            'title2_count' => $request->title2_count,
            'subtitle2_count' => $request->subtitle2_count,
            'subtitle_section1' => $request->subtitle_section1,
            'title_section1' => $request->title_section1,


            'text_consultancy' => $request->text_consultancy,
            'text2_section1' => $request->text2_section1,
            'text3_section1' => $request->text3_section1,
            'text4_section1' => $request->text4_section1,
            'title1_service' => $request->title1_service,
            'title2_service' => $request->title2_service,
            'title3_service' => $request->title3_service,
            'p1_service' => $request->p1_service,
            'p2_service' => $request->p2_service,
            'p3_service' => $request->p3_service,
            'title_video' => $request->title_video,

            'subtitle_video' => $request->subtitle_video,
            'link_video' => $request->link_video,

            'alt_company1' => $request->alt_company1,
            'alt_company2' => $request->alt_company2,
            'alt_company3' => $request->alt_company3,
            'alt_company4' => $request->alt_company4,

        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('homeCms');
    }
}
