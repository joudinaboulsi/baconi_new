@extends('layouts.admin')

@section('page_name')
    Company Page
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('companyStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!--secttion 1 -->
                    <div class="divider divider-info">
                        <div class="divider-text">Section 1</div>
                    </div>


                    <div class="row">
                        <div class="pb-4 col-md-6">
                            @if ($company->image)
                                <img src="{{ asset('assets/company/' . $company->image) }}" height="100" class="d-block">
                            @endif
                            <label for="image" class="form-label">Image <span class="badge bg-label-danger">Size: 731
                                    * 454 px</span></label>
                            <input type="file" class="form-control" id="image" name="image" />
                        </div>

                        <div class="pb-4 col-md-6">
                            <label for="alt_image" class="form-label" style="margin-top:103px;">Alt image 2</label>
                            <input type="text" class="form-control" id="alt_image" name="alt_image"
                                value="{{ $company->alt_image }}" />
                        </div>
                    </div>

                    <div class="pb-4 col-md-6">

                        @if ($company->logo)
                            <img src="{{ asset('assets/company/' . $company->logo) }}" height="100" class="d-block">
                        @endif
                        <label for="logo" class="form-label">Logo <span class="badge bg-label-danger">Size: 731
                                * 454 px</span></label>
                        <input type="file" class="form-control" id="logo" name="logo" />
                    </div>

                    <div class="pb-4">
                        <label for="text" class="form-label">Text</label>
                        <textarea class="form-control" id="text" name="text">{!! $company->text !!}</textarea>
                    </div>

                    <div class="pb-4">
                        <label for="link" class="form-label">Link</label>
                        <input type="text" class="form-control" id="link" name="link"
                            value="{{ $company->link }}" />
                    </div>

                    <!--secttion 2 -->
                    <div class="divider divider-info">
                        <div class="divider-text">Section 2</div>
                    </div>


                    <div class="row">
                        <div class="pb-4 col-md-6">
                            @if ($company->image1)
                                <img src="{{ asset('assets/company/' . $company->image1) }}" height="100" class="d-block">
                            @endif
                            <label for="image1" class="form-label">Image <span class="badge bg-label-danger">Size: 731
                                    * 454 px</span></label>
                            <input type="file" class="form-control" id="image1" name="image1" />
                        </div>

                        <div class="pb-4 col-md-6">
                            <label for="alt_image1" class="form-label" style="margin-top:103px;">Alt image </label>
                            <input type="text" class="form-control" id="alt_image1" name="alt_image1"
                                value="{{ $company->alt_image1 }}" />
                        </div>
                    </div>

                    <div class="pb-4 col-md-6">
                        @if ($company->logo1)
                            <img src="{{ asset('assets/company/' . $company->logo1) }}" height="100" class="d-block">
                        @endif
                        <label for="logo1" class="form-label">Logo  <span class="badge bg-label-danger">Size: 731
                                * 454 px</span></label>
                        <input type="file" class="form-control" id="logo1" name="logo1" />
                    </div>

                    <div class="pb-4">
                        <label for="text1" class="form-label">Text</label>
                        <textarea class="form-control" id="text1" name="text1">{!! $company->text1 !!}</textarea>
                    </div>

                    <div class="pb-4">
                        <label for="link1" class="form-label">Link 1 </label>
                        <input type="text" class="form-control" id="link1" name="link1"
                            value="{{ $company->link1 }}" />
                    </div>


                    <!--secttion 3 -->
                    <div class="divider divider-info">
                        <div class="divider-text">Section 3</div>
                    </div>


                    <div class="row">
                        <div class="pb-4 col-md-6">
                            @if ($company->image2)
                                <img src="{{ asset('assets/company/' . $company->image2) }}" height="100"
                                    class="d-block">
                            @endif
                            <label for="image2" class="form-label">Image <span class="badge bg-label-danger">Size: 731
                                    * 454 px</span></label>
                            <input type="file" class="form-control" id="image2" name="image2" />
                        </div>

                        <div class="pb-4 col-md-6">
                            <label for="alt_image2" class="form-label" style="margin-top:103px;">Alt image </label>
                            <input type="text" class="form-control" id="alt_image2" name="alt_image2"
                                value="{{ $company->alt_image2 }}" />
                        </div>
                    </div>

                    <div class="pb-4 col-md-6">
                        @if ($company->logo2)
                            <img src="{{ asset('assets/company/' . $company->logo2) }}" height="100" class="d-block">
                        @endif
                        <label for="logo2" class="form-label">Logo  <span class="badge bg-label-danger">Size: 731
                                * 454 px</span></label>
                        <input type="file" class="form-control" id="logo2" name="logo2" />
                    </div>

                    <div class="pb-4">
                        <label for="text2" class="form-label">Text</label>
                        <textarea class="form-control" id="text2" name="text2">{!! $company->text2 !!}</textarea>
                    </div>

                    <div class="pb-4">
                        <label for="link2" class="form-label">Link </label>
                        <input type="text" class="form-control" id="link2" name="link2"
                            value="{{ $company->link2 }}" />
                    </div>

                    <!--secttion 4 -->
                    <div class="divider divider-info">
                        <div class="divider-text">Section 4</div>
                    </div>


                    <div class="row">
                        <div class="pb-4 col-md-6">

                            @if ($company->image3)
                                <img src="{{ asset('assets/company/' . $company->image3) }}" height="100"
                                    class="d-block">
                            @endif
                            <label for="image3" class="form-label">Image <span class="badge bg-label-danger">Size: 731
                                    * 454 px</span></label>
                            <input type="file" class="form-control" id="image3" name="image3" />
                        </div>

                        <div class="pb-4 col-md-6">
                            <label for="alt_image3" class="form-label" style="margin-top:103px;">Alt image </label>
                            <input type="text" class="form-control" id="alt_image3" name="alt_image3"
                                value="{{ $company->alt_image3 }}" />
                        </div>
                    </div>

                    <div class="pb-4 col-md-6">
                        @if ($company->logo3)
                            <img src="{{ asset('assets/company/' . $company->logo3) }}" height="100" class="d-block">
                        @endif
                        <label for="logo3" class="form-label">Logo <span class="badge bg-label-danger">Size: 731
                                * 454 px</span></label>
                        <input type="file" class="form-control" id="logo3" name="logo3" />
                    </div>

                    <div class="pb-4">
                        <label for="text3" class="form-label">Text</label>
                        <textarea class="form-control" id="text3" name="text3">{!! $company->text3 !!}</textarea>
                    </div>

                    <div class="pb-4">
                        <label for="link3" class="form-label">Link  </label>
                        <input type="text" class="form-control" id="link3" name="link3"
                            value="{{ $company->link3 }}" />
                    </div>



                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
