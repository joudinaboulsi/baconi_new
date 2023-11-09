<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\TitlePage;
use App\Helpers\FileUploadHelper;

class BlogController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $page = TitlePage::find(1);
        $related = TitlePage::find(2);
        $blogs = Blog::all();
        return view('cms.blog.index', compact('page', 'related', 'blogs'));
    }

    public function storePage(Request $request)
    {
        TitlePage::find(1)->update([
            'title' => $request->title,

        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('blogCms');
    }

    public function storeRelated(Request $request)
    {
        TitlePage::find(2)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        toastr()->success('Data has been saved successfully!', 'Congrats');
        return redirect()->route('blogCms');
    }

    public function create()
    {
        return view('cms.blog.create');
    }

    public function store(Request $request)
    {
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/blog/');
        $icon = FileUploadHelper::uploadFile($request, 'icon', 'assets/blog/');
        $og_image = FileUploadHelper::uploadFile($request, 'og_image', 'assets/seo/');
        
        Blog::create([

            'title' => $request->title,
            'image' => $image,
            'alt_image' => $request->alt_image,
            'by' => $request->by,
            'date' => $request->date,
            'text_blog' => $request->text_blog,
    
            'title1' => $request->title1,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'title4' => $request->title4,
            'title5' => $request->title5,
            'title6' => $request->title6,
            'title7' => $request->title7,
            'title8' => $request->title8,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'og_image' => $og_image,

        ]);
  
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('blogCms');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('cms.blog.edit',compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
  
        $image = FileUploadHelper::uploadFile($request, 'image', 'assets/blog/');
        if($image!=null)
            $blog->update(['image' => $image]);
        
        $og_image = FileUploadHelper::uploadFile($request, 'og_image', 'assets/seo/');
        if($og_image!=null)
            $blog->update(['og_image' => $og_image]);

          $blog->update([
    
            'title' => $request->title,
            'alt_image' => $request->alt_image,
            'by' => $request->by,
            'date' => $request->date,
            'text_blog' => $request->text_blog,
        
            'title1' => $request->title1,
            'title2' => $request->title2,
            'title3' => $request->title3,
            'title4' => $request->title4,
            'title5' => $request->title5,
            'title6' => $request->title6,
            'title7' => $request->title7,
            'title8' => $request->title8,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            
        ]);
  
        toastr()->success('Data has been saved successfully!');
        return redirect()->route('blogCms');
    }
  
    public function delete($id)
    {
        Blog::find($id)->delete();
        toastr()->success('Data has been deleted successfully!');
        return redirect()->route('blogCms');
    }


}
