<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Helpers\FileUploadHelper;


class TeamController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
      $sliders = Team::all();
      return view('cms.team.index',compact('sliders'));
    }
  
    public function create()
    {
      return view('cms.team.create');
    }
  
    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
      
  
        Team::create([

            'image' => $image,
            'alt_image' => $request->alt_image,
            'name' => $request->name,
            'position' => $request->position,
        ]);
  
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('teamCms');
    }
  
  
    public function edit($id)
    {
      $team = Team::find($id);
      return view('cms.team.edit',compact('team'));
    }
  
    public function update(Request $request, $id)
    {
        $team = Team::find($id);
  
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/sliders/');
        if($image!=null)
            $team->update(['image' => $image]);
  
          $team->update([
    
            'name' => $request->name,
            'position' => $request->position,
            'alt_image' => $request->alt_image,
        ]);
  
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('teamCms');
    }
  
    public function delete($id)
    {
        Team::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('teamCms');
    }
}
