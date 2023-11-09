<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\FileUploadHelper;
use App\Settings;
class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $settings = Settings::findOrFail(1);
        return view('cms.settings', compact('settings'));
    }

    public function store(Request $request)
    {
        $settings = Settings::find(1);

        $logo = FileUploadHelper::uploadFile($request, 'logo', 'assets/logo/');
        if($logo!=null)
            $settings->update(['logo' => $logo]);


        $settings->update([
            'desc' => $request->desc,
            'facebook' => $request->facebook,
            'email' => $request->email,
            'phone' => $request->phone,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'alt_logo' => $request->alt_logo,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('settingsCms');
    }
}
