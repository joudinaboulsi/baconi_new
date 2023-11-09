<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Helpers\FileUploadHelper;

class AbouController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $about = About::find(1);
        return view('cms.about',compact('about'));
    }

    public function store(Request $request)
    {
        $about = About::find(1);

        $background = FileUploadHelper::uploadFile($request, 'background', 'assets/about/');
        if($background!=null)
            $about->update(['background' => $background]);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/about/');
        if($image!=null)
            $about->update(['image' => $image]);

        $about->update([
            'subtitle_page' => $request->subtitle_page,
            'title_page' => $request->title_page,
            'title_section1' => $request->title_section1,
            'text_section1' => $request->text_section1,
            'title_section2' => $request->title_section2,
            'text_section2' => $request->text_section2,
            'title_section3' => $request->title_section3,
            'text_section3' => $request->text_section3,
            'title_section4' => $request->title_section4,
            'text_section4' => $request->text_section4,
            'alt_image' => $request->alt_image,
            'title_team' => $request->title_team,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('aboutCms');
    }
}
