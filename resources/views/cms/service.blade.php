@extends('layouts.admin')

@section('page_name')
    Service Page
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('serviceStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="divider divider-info">
                        <div class="divider-text">Section Header</div>
                    </div>
                    <!-- Video Section -->
                    <div class="row">
                        <div class="col-md-12 pb-4">
                            @if ($service->video)
                                <video width="320" height="240" controls class="d-block">
                                    <source src="{{ asset('assets/service/' . $service->video) }}" type="video/mp4">
                                </video>
                            @endif
                            <label for="video" class="form-label pt-4">Video</label>
                            <input type="file" class="form-control" id="video" name="video" />
                        </div>
                    </div>

                    <!-- Title and Text Section -->
                    <div class="row">
                        <div class="col-md-12 pb-4">
                            <label for="subtitle_page" class="form-label">Subtitle Page</label>
                            <input type="text" class="form-control" id="subtitle_page" name="subtitle_page"
                                value="{{ $service->subtitle_page }}" />
                        </div>

                        <div class="col-md-12 pb-4">
                            <label for="title_page" class="form-label">Title Page</label>
                            <input type="text" class="form-control" id="title_page" name="title_page"
                                value="{{ $service->title_page }}" />
                        </div>

                        <div class="divider divider-info">
                            <div class="divider-text">Section 1</div>
                        </div>

                        <div class="col-md-12 pb-4">
                            <label for="title_section1" class="form-label">Title </label>
                            <input type="text" class="form-control" id="title_section1" name="title_section1"
                                value="{{ $service->title_section1 }}" />
                        </div>

                        <div class="col-md-12 pb-4">
                            <label for="subtitle_section1" class="form-label">Subtitle </label>
                            <input type="text" class="form-control" id="subtitle_section1" name="subtitle_section1"
                                value="{{ $service->subtitle_section1 }}" />
                        </div>


                        <div class="col-md-12 pb-4">
                            <label for="text_section1" class="form-label">Text </label>
                            <textarea class="form-control" id="text_section1" name="text_section1">{!! $service->text_section1 !!}</textarea>
                        </div>

                        <div class="col-md-12 pb-4">
                            <label for="link_section1" class="form-label">Link Text </label>
                            <input type="text" class="form-control" id="link_section1" name="link_section1"
                                value="{{ $service->link_section1 }}" />
                        </div>

                        <div class="col-md-12 pb-4">
                            <label for="url_section1" class="form-label">Url </label>
                            <input type="text" class="form-control" id="url_section1" name="url_section1"
                                value="{{ $service->url_section1 }}" />
                        </div>

                    </div>

                    <!-- Alt Image and Image Section -->
                    <div class="row">
                        <div class="col-md-6 pb-4">
                            @if ($service->image)
                                <img src="{{ asset('assets/service/' . $service->image) }}" height="100" class="d-block">
                            @endif
                            <label for="image" class="form-label pt-3">Image <span class="badge bg-label-danger">Size: 1720 *
                                    658 px</span></label>
                            <input type="file" class="form-control" id="image" name="image" />
                        </div>

                        <div class="col-md-6 pb-4">
                            <label for="alt_image" class="form-label" style="margin-top:115px">Alt Image</label>
                            <input type="text" class="form-control" id="alt_image" name="alt_image"
                                value="{{ $service->alt_image }}" />
                        </div>
                    </div>


                    <!-- Section 2 -->
                    <div class="divider divider-info">
                        <div class="divider-text">Section Two</div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 pb-4">
                            <label for="title_section2" class="form-label">Title </label>
                            <input type="text" class="form-control" id="title_section2" name="title_section2"
                                value="{{ $service->title_section2 }}" />
                        </div>

                        <div class="col-md-12 pb-4">
                            <label for="title_tab1" class="form-label">Title Tab 1</label>
                            <input type="text" class="form-control" id="title_tab1" name="title_tab1"
                                value="{{ $service->title_tab1 }}" />
                        </div>

                        <div class="col-md-12 pb-4">
                            <label for="title_tab2" class="form-label">Title Tab 2</label>
                            <input type="text" class="form-control" id="title_tab2" name="title_tab2"
                                value="{{ $service->title_tab2 }}" />
                        </div>

                        <div class="col-md-12 pb-4">
                            <label for="title_tab3" class="form-label">Title Tab 3</label>
                            <input type="text" class="form-control" id="title_tab3" name="title_tab3"
                                value="{{ $service->title_tab3 }}" />
                        </div>
                          <!-- Content tab 2 -->
                          <div class="divider divider-info">
                            <div class="divider-text">Content tab 1</div>
                        </div>

                        <div class="col-md-12 pb-4">
                            <label for="text_tab1" class="form-label">Text Tab 1</label>
                            <textarea class="form-control" id="text_tab1" name="text_tab1">{!! $service->text_tab1 !!}</textarea>
                        </div>

                        <!-- Content tab 2 -->
                        <div class="divider divider-info">
                            <div class="divider-text">Content tab 2</div>
                        </div>

                        <div class="col-md-6 pb-4">
                            @if ($service->icon_tab2)
                                <img src="{{ asset('assets/service/' . $service->icon_tab2) }}" height="100"
                                    class="d-block">
                            @endif
                            <label for="icon_tab2" class="form-label pt-2">icon_tab2 </label>
                            <input type="file" class="form-control" id="icon_tab2" name="icon_tab2" />
                        </div>


                        <div class="col-md-12 pb-4">
                            <label for="small_title_tab2" class="form-label">Title Tab 2</label>
                            <input type="text" class="form-control" id="small_title_tab2" name="small_title_tab2"
                                value="{{ $service->small_title_tab2 }}" />
                        </div>

                        <div class="row">

                            <div class="col-md-6 pb-4">
                                @if ($service->image_tab2)
                                    <img src="{{ asset('assets/service/' . $service->image_tab2) }}" height="100"
                                        class="d-block">
                                @endif
                                <label for="image_tab2" class="form-label">image_tab2 </label>
                                <input type="file" class="form-control" id="image_tab2" name="image_tab2" />
                            </div>

                            <div class="pb-4 col-md-6">
                                <label for="alt_image_tab2" class="form-label" style="margin-top: 103px;">Alt
                                    image</label>
                                <input type="text" class="form-control" id="alt_image_tab2" name="alt_image_tab2"
                                    value="{{ $service->alt_image_tab2 }}" />
                            </div>
                        </div>

                        <div class="col-md-12 pb-4">
                            <label for="text_tab2" class="form-label">Text1 </label>
                            <textarea class="form-control" id="text_tab2" name="text_tab2">{!! $service->text_tab2 !!}</textarea>
                        </div>


                        <div class="col-md-12 pb-4">
                            <label for="text2_tab2" class="form-label">Text 2</label>
                            <textarea class="form-control" id="text2_tab2" name="text2_tab2">{!! $service->text2_tab2 !!}</textarea>
                        </div>


                        <!-- Content tab 3 -->
                        <div class="divider divider-info">
                            <div class="divider-text">Content tab 3</div>
                        </div>

                        <div class="col-md-6 pb-4">
                            @if ($service->icon_tab3)
                                <img src="{{ asset('assets/service/' . $service->icon_tab3) }}" height="100"
                                    class="d-block">
                            @endif
                            <label for="icon_tab3" class="form-label">icon_tab3 </label>
                            <input type="file" class="form-control" id="icon_tab3" name="icon_tab3" />
                        </div>


                        <div class="col-md-12 pb-4">
                            <label for="small_title_tab3" class="form-label">Title Tab 3</label>
                            <input type="text" class="form-control" id="small_title_tab3" name="small_title_tab3"
                                value="{{ $service->small_title_tab3 }}" />
                        </div>

                        <div class="row">

                            <div class="col-md-6 pb-4">
                                @if ($service->image_tab3)
                                    <img src="{{ asset('assets/service/' . $service->image_tab3) }}" height="100"
                                        class="d-block">
                                @endif
                                <label for="image_tab3" class="form-label pt-3">image_tab3 </label>
                                <input type="file" class="form-control" id="image_tab3" name="image_tab3" />
                            </div>


                            <div class="pb-4 col-md-6">
                                <label for="alt_image_tab3" class="form-label" style="margin-top: 115px;">Alt
                                    image</label>
                                <input type="text" class="form-control" id="alt_image_tab3" name="alt_image_tab3"
                                    value="{{ $service->alt_image_tab3 }}" />
                            </div>
                        </div>
                        <div class="col-md-12 pb-4">
                            <label for="text_tab3" class="form-label">Text 1 </label>
                            <textarea class="form-control" id="text_tab3" name="text_tab3">{!! $service->text_tab3 !!}</textarea>
                        </div>


                        <div class="col-md-12 pb-4">
                            <label for="text2_tab3" class="form-label">Text 2</label>
                            <textarea class="form-control" id="text2_tab3" name="text2_tab3">{!! $service->text2_tab3 !!}</textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
