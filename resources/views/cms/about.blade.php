@extends('layouts.admin')

@section('page_name')
    Home Page
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('aboutStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="pb-4 col-md-6">

                         @if ($about->background)
                                <img src="{{ asset('assets/about/' . $about->background) }}" height="100"
                                    class="d-block">
                            @endif 

                            <label for="background" class="form-label">Image <span class="badge bg-label-danger">Size: 731 *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="background" name="background" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="pb-4">
                            <label for="title_page" class="form-label">Title Page</label>
                            <input type="text" class="form-control" id="title_page" name="title_page" value="{{$about->title_page}}"/>
                        </div>

                        <div class="pb-4">
                            <label for="subtitle_page" class="form-label">Subtitle Page</label>
                            <input type="text" class="form-control" id="subtitle_page" name="subtitle_page" value="{{$about->subtitle_page}}"/>
                        </div>

                        <div class="divider divider-info">
                            <div class="divider-text">Section 1</div>
                        </div>
                        <div class="row">
                            <div class="pb-4 col-md-6">
                                @if ($about->image)
                                    <img src="{{ asset('assets/about/' . $about->image) }}" height="100"
                                        class="d-block">
                                @endif
                                <label for="image" class="form-label">Image <span class="badge bg-label-danger">Size:
                                        731
                                        * 454 px</span></label>
                                <input type="file" class="form-control" id="image" name="image" />
                            </div>

                            <div class="pb-4 col-md-6">
                                <label for="alt_image" class="form-label" style="margin-top:103px;">Alt image </label>
                                <input type="text" class="form-control" id="alt_image" name="alt_image" value="{{$about->alt_image}}" />
                            </div>
                        </div>

                        <div class="pb-4">
                            <label for="title_section2" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title_section1" name="title_section1" value="{{$about->title_section1}}"/>
                        </div>
                        <div class="pb-4">
                            <label for="text_section1" class="form-label">Text</label>
                            <textarea class="form-control" id="text_section1" name="text_section1">{!!$about->text_section1 !!}</textarea>
                        </div>
                    </div>


                    <div class="divider divider-info">
                        <div class="divider-text">Section 2 </div>
                    </div>
                    <div class="pb-4">
                        <label for="title_section2" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_section2" name="title_section2" value="{{$about->title_section2}}" />
                    </div>
                    <div class="pb-4">
                        <label for="text_section2" class="form-label">Text</label>
                        <textarea class="form-control" id="text_section2" name="text_section2">{!!$about->text_section2 !!}</textarea>
                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section Principles </div>
                    </div>
                    <div class="pb-4">
                        <label for="title_section3" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_section3" name="title_section3" value="{{$about->title_section3}}" />
                    </div>
                    <div class="pb-4">
                        <label for="text_section3" class="form-label">Text</label>
                        <textarea class="form-control" id="text_section3" name="text_section3">{!!$about->text_section3 !!}</textarea>
                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section Memberships </div>
                    </div>
                    <div class="pb-4">
                        <label for="title_section4" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_section4" name="title_section4" value="{{$about->title_section4}}" />
                    </div>
                    <div class="pb-4">
                        <label for="text_section4" class="form-label">Text</label>
                        <textarea class="form-control" id="text_section4" name="text_section4">{!!$about->text_section4 !!}</textarea>
                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section Team </div>
                    </div>
                    <div class="pb-4">
                        <label for="title_team" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_team" name="title_team" value="{{$about->title_team}}" />
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
