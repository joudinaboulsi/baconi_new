@extends('layouts.admin')

@section('page_name')
    Home Page
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form action="{{route('homeStore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="divider divider-info">
                        <div class="divider-text">Section About-us</div>
                    </div>
                    <div class="row">
                        <div class="pb-4">
                            <label for="title1" class="form-label">Title 1</label>
                            <input type="text" class="form-control" id="title1" name="title1" value="{{ $home->title1 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="subtitle1" class="form-label">SubTitle 1</label>
                            <input type="text" class="form-control" id="subtitle1" name="subtitle1"  value="{{ $home->subtitle1 }}" />
                        </div>
                        <div class="pb-4 col-md-6">
                            @if ($home->icon1)
                                <img src="{{ asset('assets/home/' . $home->icon1) }}" height="100" class="d-block">
                            @endif
                            <label for="icon1" class="form-label">Icon1 <span class="badge bg-label-danger">Size: 731 *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="icon1" name="icon1" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="pb-4">
                            <label for="title2" class="form-label">Title 2</label>
                            <input type="text" class="form-control" id="title2" name="title2"  value="{{ $home->title2 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="subtitle2" class="form-label">SubTitle 2</label>
                            <input type="text" class="form-control" id="subtitle2" name="subtitle2"  value="{{ $home->subtitle2 }}" />
                        </div>
                        <div class="pb-4 col-md-6">
                             @if ($home->icon2)
                            <img src="{{ asset('assets/home/' . $home->icon2) }}" height="100" class="d-block">
                            @endif 
                            <label for="icon2" class="form-label">Icon 2 <span class="badge bg-label-danger">Size: 731 *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="icon2" name="icon2" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="pb-4">
                            <label for="title3" class="form-label">Title 3</label>
                            <input type="text" class="form-control" id="title3" name="title3" value="{{ $home->title3 }}"  />
                        </div>

                        <div class="pb-4">
                            <label for="subtitle3" class="form-label">SubTitle 3</label>
                            <input type="text" class="form-control" id="subtitle3" name="subtitle3" value="{{ $home->subtitle3 }}" />
                        </div>
                        <div class="pb-4 col-md-6">
                            @if ($home->icon3)
                                <img src="{{ asset('assets/home/' . $home->icon3) }}" height="100" class="d-block">
                            @endif
                            <label for="icon3" class="form-label">Icon 3 <span class="badge bg-label-danger">Size: 731 *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="icon3" name="icon3" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="pb-4">
                            <label for="title4" class="form-label">Title 4</label>
                            <input type="text" class="form-control" id="title4" name="title4" value="{{ $home->title4 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="subtitle4" class="form-label">SubTitle 4</label>
                            <input type="text" class="form-control" id="subtitle4" name="subtitle4" value="{{ $home->subtitle4 }}" />
                        </div>
                        <div class="pb-4 col-md-6">
                            @if ($home->icon4)
                                <img src="{{ asset('assets/home/' . $home->icon4) }}" height="100" class="d-block">
                            @endif
                            <label for="icon4" class="form-label">Icon 4 <span class="badge bg-label-danger">Size: 731
                                    *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="icon4" name="icon4" />
                        </div>
                    </div>


                    <div class="divider divider-info">
                        <div class="divider-text">Section 1</div>
                    </div>
                    <div class="row">
                        <div class="pb-4">
                            <label for="counter1" class="form-label">Counter 1 </label>
                            <input type="text" class="form-control" id="counter1" name="counter1" value="{{ $home->counter1 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="title1_count" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title1_count" name="title1_count" value="{{ $home->title1_count }}" />
                        </div>

                        <div class="pb-4">
                            <label for="subtitle1_count" class="form-label">Subtitle</label>
                            <input type="text" class="form-control" id="subtitle1_count" name="subtitle1_count" value="{{ $home->subtitle1_count }}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="pb-4 col-md-6">
                            @if ($home->image_count)
                                <img src="{{ asset('assets/home/' . $home->image_count) }}" height="100"
                                    class="d-block">
                            @endif
                            <label for="image_count" class="form-label">Image <span class="badge bg-label-danger">Size:
                                    731 *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="image_count" name="image_count" />
                        </div>


                    </div>

                    <div class="row">
                        <div class="pb-4">
                            <label for="years" class="form-label">Years </label>
                            <input type="text" class="form-control" id="years" name="years" value="{{ $home->years }}"/>
                        </div>

                        <div class="pb-4">
                            <label for="counter2" class="form-label">Counter 2 </label>
                            <input type="text" class="form-control" id="counter2" name="counter2" value="{{ $home->counter2 }}"/>
                        </div>

                        <div class="pb-4">
                            <label for="title2_count" class="form-label">Title 2</label>
                            <input type="text" class="form-control" id="title2_count" name="title2_count" value="{{ $home->title2_count }}"/>
                        </div>

                        <div class="pb-4">
                            <label for="subtitle2_count" class="form-label">Subtitle 2</label>
                            <input type="text" class="form-control" id="subtitle2_count" name="subtitle2_count" value="{{ $home->subtitle2_count }}" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="pb-4 col-md-6">
                            @if ($home->logo)
                                <img src="{{ asset('assets/home/' . $home->logo) }}" height="100" class="d-block">
                            @endif
                            <label for="logo" class="form-label">Image <span class="badge bg-label-danger">Size: 731
                                    *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="logo" name="logo" />
                        </div>


                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section 2</div>
                    </div>


                    <div class="row">
                        <div class="col-md-6 pb-4">
                            @if ($home->company1)
                                <img src="../assets/home/{{ $home->company1 }}" height="100" class="d-block">
                            @endif
                            <label for="company1" class="form-label">Image 1 <span class="badge bg-label-danger">Size:
                                    500* 500 px</span></label>
                            <input type="file" class="form-control" id="company1" name="company1">
                        </div>
                        <div class="col-md-6 pb-4">
                            <label for="alt_company1" class="form-label" style="margin-top: 103px;">Alt Image 1</label>
                            <input type="text" class="form-control" id="alt1" name="alt_company1"
                                value="{{ $home->alt_company1 }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pb-4">
                            @if ($home->company2)
                                <img src="../assets/home/{{ $home->company2 }}" height="100" class="d-block">
                            @endif
                            <label for="company2" class="form-label">Image 2 <span class="badge bg-label-danger">Size:
                                    500* 500 px</span></label>
                            <input type="file" class="form-control" id="company2" name="company2">
                        </div>
                        <div class="col-md-6 pb-4">
                            <label for="alt_company2" class="form-label" style="margin-top: 103px;">Alt Image 2</label>
                            <input type="text" class="form-control" id="alt_company2" name="alt_company2"
                                value="{{ $home->alt_company2 }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pb-4">
                            @if ($home->company3)
                                <img src="../assets/home/{{ $home->company3 }}" height="100" class="d-block">
                            @endif
                            <label for="company3" class="form-label">Image 3 <span class="badge bg-label-danger">Size:
                                    500* 500 px</span></label>
                            <input type="file" class="form-control" id="company3" name="company3">
                        </div>
                        <div class="col-md-6 pb-4">
                            <label for="alt_company3" class="form-label" style="margin-top: 103px;">Alt Image 3</label>
                            <input type="text" class="form-control" id="alt_company3" name="alt_company3"
                                value="{{ $home->alt_company3 }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 pb-4">
                            @if ($home->company4)
                                <img src="../assets/home/{{ $home->company4 }}" height="100" class="d-block">
                            @endif
                            <label for="company4" class="form-label">Image 4 <span class="badge bg-label-danger">Size:
                                    500* 500 px</span></label>
                            <input type="file" class="form-control" id="company4" name="company4">
                        </div>
                        <div class="col-md-6 pb-4">
                            <label for="alt_company4" class="form-label" style="margin-top: 103px;">Alt Image 3</label>
                            <input type="text" class="form-control" id="alt_company4" name="alt_company4"
                                value="{{ $home->alt_company4 }}">
                        </div>
                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section 3</div>
                    </div>



                    <div class="pb-4">
                        <label for="subtitle_section1" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle_section1" name="subtitle_section1" value="{{ $home->subtitle_section1 }}" />
                    </div>

                    <div class="pb-4">
                        <label for="title_section1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title_section1" name="title_section1" value="{{ $home->title_section1 }}" />
                    </div>

                    <div class="pb-4">
                        <label for="text_consultancy" class="form-label">text 1</label>
                        <input type="text" class="form-control" id="text_consultancy" name="text_consultancy" value="{{ $home->text_consultancy }}" />
                    </div>


                    <div class="pb-4">
                        <label for="text2_section1" class="form-label">text 2</label>
                        <input type="text" class="form-control" id="text2_section1" name="text2_section1" value="{{ $home->text2_section1 }}" />
                    </div>

                    <div class="pb-4">
                        <label for="text3_section1" class="form-label">text 3</label>
                        <input type="text" class="form-control" id="text3_section1" name="text3_section1" value="{{ $home->text3_section1 }}" />
                    </div>


                    <div class="pb-4">
                        <label for="text4_section1" class="form-label">text 4</label>
                        <input type="text" class="form-control" id="text4_section1" name="text4_section1"value="{{ $home->text4_section1 }}" />
                    </div>

                    <div class="row">
                        <div class="pb-4 col-md-6">
                       @if ($home->image_section1)
                            <img src="{{ asset('assets/home/' . $home->image_section1) }}" height="100" class="d-block">
                        @endif 
                            <label for="image_section1" class="form-label">Image <span
                                    class="badge bg-label-danger">Size: 731
                                    * 454 px</span></label>
                            <input type="file" class="form-control" id="image_section1" name="image_section1" />
                        </div>

                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section 4</div>
                    </div>

                    <div class="row">


                        <div class="pb-4">
                            <label for="title1_service" class="form-label">Title 1</label>
                            <input type="text" class="form-control" id="title1_service" name="title1_service" value="{{ $home->title1_service }}" />
                        </div>


                        <div class="pb-4">
                            <label for="p1_service" class="form-label">Text 1</label>
                            <textarea class="form-control" id="p1_service" name="p1_service">{!! $home->p1_service !!}</textarea>
                        </div>

                        <div class="pb-4 col-md-6">
                            @if ($home->image1_service)
                                <img src="{{ asset('assets/home/' . $home->image1_service) }}" height="100"
                                    class="d-block">
                            @endif
                            <label for="image1_service" class="form-label">Image 1<span
                                    class="badge bg-label-danger">Size: 731
                                    * 454 px</span></label>
                            <input type="file" class="form-control" id="image1_service" name="image1_service" />
                        </div>

                    </div>

                    <div class="row">


                        <div class="pb-4">
                            <label for="title2_service" class="form-label">Title 2</label>
                            <input type="text" class="form-control" id="title2_service" name="title2_service" value="{{ $home->title2_service }}" />
                        </div>


                        <div class="pb-4">
                            <label for="p2_service" class="form-label">Text2</label>
                            <textarea class="form-control" id="p2_service" name="p2_service">{!! $home->p2_service !!}</textarea>
                        </div>

                        <div class="pb-4 col-md-6">
                            @if ($home->image2_service)
                                <img src="{{ asset('assets/home/' . $home->image2_service) }}" height="100"
                                    class="d-block">
                            @endif
                            <label for="image2_service" class="form-label">Image 2<span
                                    class="badge bg-label-danger">Size: 731
                                    * 454 px</span></label>
                            <input type="file" class="form-control" id="image2_service" name="image2_service" />
                        </div>

                    </div>

                    <div class="row">


                        <div class="pb-4">
                            <label for="title3_service" class="form-label">Title 3</label>
                            <input type="text" class="form-control" id="title3_service" name="title3_service" value="{{ $home->title3_service }}"/>
                        </div>


                        <div class="pb-4">
                            <label for="p3_service" class="form-label">Text 3</label>
                            <textarea class="form-control" id="p3_service" name="p3_service">{!! $home->p3_service !!}</textarea>
                        </div>

                        <div class="pb-4 col-md-6">
                            @if ($home->image3_service)
                                <img src="{{ asset('assets/home/' . $home->image3_service) }}" height="100"
                                    class="d-block">
                            @endif
                            <label for="image3_service" class="form-label">Image 3<span
                                    class="badge bg-label-danger">Size: 731
                                    * 454 px</span></label>
                            <input type="file" class="form-control" id="image3_service" name="image3_service" />
                        </div>

                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section 5</div>
                    </div>
                    <div class="row">


                        <div class="pb-4">
                            <label for="title_video" class="form-label">Title </label>
                            <input type="text" class="form-control" id="title_video" name="title_video" value="{{ $home->title_video }}" />
                        </div>

                        <div class="pb-4">
                            <label for="subtitle_video" class="form-label">subtitle </label>
                            <input type="text" class="form-control" id="subtitle_video" name="subtitle_video" value="{{ $home->subtitle_video }}"/>
                        </div>

                        <div class="pb-4">
                            <label for="link_video" class="form-label">link </label>
                            <input type="text" class="form-control" id="link_video" name="link_video" value="{{ $home->link_video }}" />
                        </div>

                        <div class="pb-4 col-md-6">
                            @if ($home->video)
                                <video width="320" height="240" controls class="d-block">
                                    <source src="{{ asset('assets/home/' . $home->video) }}" type="video/mp4">
                                </video>
                            @endif
                            <label for="video" class="form-label pt-4">Video</label>
                            <input type="file" class="form-control" id="video" name="video" />

                        </div>
                    </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
