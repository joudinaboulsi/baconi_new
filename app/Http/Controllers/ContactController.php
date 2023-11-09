<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\Contact;

class ContactController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contact = Contact::find(1);
        return view('cms.contact',compact('contact'));
    }

    public function store(Request $request)
    {
        // dd($request);
        $contact = Contact::find(1);

        $background = FileUploadHelper::uploadFile($request, 'background', 'assets/contact/');
        if($background!=null)
            $contact->update(['background' => $background]);

        $logoContact = FileUploadHelper::uploadFile($request, 'logo_contact', 'assets/contact/');
        if($logoContact!=null)
            $contact->update(['logo_contact' => $logoContact]);


        $icon_lb = FileUploadHelper::uploadFile($request, 'icon_lb', 'assets/contact/');
        if($icon_lb!=null)
            $contact->update(['icon_lb' => $icon_lb]);

        $icon_jordan = FileUploadHelper::uploadFile($request, 'icon_jordan', 'assets/contact/');
        if($icon_jordan!=null)
            $contact->update(['icon_jordan' => $icon_jordan]);
                
        $icon_cyprus = FileUploadHelper::uploadFile($request, 'icon_cyprus', 'assets/contact/');
        if($icon_cyprus!=null)
            $contact->update(['icon_cyprus' => $icon_cyprus]);

        $image_address = FileUploadHelper::uploadFile($request, 'image_address', 'assets/contact/');
        if($image_address!=null)
            $contact->update(['image_address' => $image_address]);
                
            
        $contact->update([

            'subtitle_header' => $request->subtitle_header,
            'title_header' => $request->title_header,
            'subtitle_header' => $request->subtitle_header,
          
            'title_contact' => $request->title_contact,
            'subtitle_contact' => $request->subtitle_contact,
            'title_career' => $request->title_career,
            'subtitle_career' => $request->subtitle_career,
            'title_address' => $request->title_address,
            'subtitle_address' => $request->subtitle_address,
            'title1' => $request->title1,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'location1' => $request->location1,
            'location3' => $request->location3,
            'location2' => $request->location2,
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'phone3' => $request->phone3,
            'email1' => $request->email1,
            'email2' => $request->email2,
            'email3' => $request->email3,
            'title_media' => $request->title_media,
            'title_section1' => $request->title_section1,
            'title_tab1' => $request->title_tab1,
            'title_tab2' => $request->title_tab2,


        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('contactCms');
    }
}
