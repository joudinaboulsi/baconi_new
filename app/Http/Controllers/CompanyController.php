<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Helpers\FileUploadHelper;

class CompanyController extends Controller
{
    //

    public function index()
    {
        $company = Company::find(1);
        return view('cms.company',compact('company'));
    }

    public function store(Request $request)
    {
        $company = Company::find(1);

        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/company/');
        if($image!=null)
            $company->update(['image' => $image]);


        $logo = FileUploadHelper::uploadFile($request, 'logo', 'assets/company/');
        if($logo!=null)
            $company->update(['logo' => $logo]);

        $image1 = FileUploadHelper::uploadFile($request, 'image1', 'assets/company/');
        if($image1!=null)
        $company->update(['image1' => $image1]);

        $logo1 = FileUploadHelper::uploadFile($request, 'logo1', 'assets/company/');
        if($logo1!=null)
        $company->update(['logo1' => $logo1]);

        $image2 = FileUploadHelper::uploadFile($request, 'image2', 'assets/company/');
        if($image2!=null)
        $company->update(['image2' => $image2]);

        $logo2 = FileUploadHelper::uploadFile($request, 'logo2', 'assets/company/');
        if($logo2!=null)
        $company->update(['logo2' => $logo2]);

        $image3 = FileUploadHelper::uploadFile($request, 'image3', 'assets/company/');
        if($image3!=null)
        $company->update(['image3' => $image3]);

        $logo3 = FileUploadHelper::uploadFile($request, 'logo3', 'assets/company/');
        if($logo3!=null)
        $company->update(['logo3' => $logo3]);

        $company->update([

            'text' => $request->text,
            'link' => $request->link,
            'text1' => $request->text1,
            'link1' => $request->link1,
            'text2' => $request->text2,
            'link2' => $request->link2,
            'text3' => $request->text3,
            'link3' => $request->link3,
            'alt_image' => $request->alt_image,
            'alt_image1' => $request->alt_image1,
            'alt_image2' => $request->alt_image2,
            'alt_image3' => $request->alt_image3,
           

        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('companyCms');
    }

}
