@extends('layouts.admin')

@section('page_name')
    Edit Membership Slider
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('membershipUpdate',$slider->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="pb-4 col-md-6">
                        
                        @if ($slider->image)
                           <img src="{{ asset('assets/sliders/' . $slider->image) }}" height="100" class="d-block">
                       @endif

                        <label for="image" class="form-label">Image <span class="badge bg-label-danger">Size: 1320 * 180
                                px</span></label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4">
                        <label for="alt_image" class="form-label">Alt image</label>
                        <input type="text" class="form-control" id="alt_image" name="alt_image" value="{{$slider->alt_image}}" />
                    </div>


                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
