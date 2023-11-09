@extends('layouts.admin')

@section('page_name')
    Contact Page
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form action="{{route('contactStore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="divider divider-info">
                        <div class="divider-text">Section Header</div>
                    </div>
                    <div class="row">
                        <div class="pb-4">
                            <label for="title_header" class="form-label">Title </label>
                            <input type="text" class="form-control" id="title_header" name="title_header" value ="{{ $contact->title_header  }}" />
                        </div>

                        <div class="pb-4">
                            <label for="subtitle_header" class="form-label">SubTitle </label>
                            <input type="text" class="form-control" id="subtitle_header" name="subtitle_header" value ="{{ $contact->subtitle_header }}" />
                        </div>
                     
                        <div class="pb-4 col-md-6">
                            @if ($contact->background)
                             <img src="{{ asset('assets/contact/' . $contact->background) }}" height="100" class="d-block">
                            @endif
                             <label for="background" class="form-label">Background <span class="badge bg-label-danger">Size: 731 *
                                     454 px</span></label>
                             <input type="file" class="form-control" id="background" name="background" />
                         </div>

                         <div class="pb-4 col-md-6">
                            @if ($contact->logo_contact)
                             <img src="{{ asset('assets/contact/' . $contact->logo_contact) }}" height="100" class="d-block">
                            @endif
                             <label for="logo_contact" class="form-label">Image <span class="badge bg-label-danger">Size: 731 *
                                     454 px</span></label>
                             <input type="file" class="form-control" id="logo_contact" name="logo_contact" />
                         </div>
 
                    </div>
                    <div class="divider divider-info">
                        <div class="divider-text">Section 1</div>
                    </div>
                    <div class="pb-4">
                        <label for="title_section1" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title_section1" name="title_section1" value ="{{ $contact->title_section1 }}" />
                    </div>

                    <div class="pb-4">
                        <label for="title_tab1" class="form-label">title Tab Contact </label>
                        <input type="text" class="form-control" id="title_tab1" name="title_tab1" value ="{{ $contact->title_tab1 }}" />
                    </div>

                    <div class="pb-4">
                        <label for="title_tab2" class="form-label">title Tab Career</label>
                        <input type="text" class="form-control" id="title_tab2" name="title_tab2" value ="{{ $contact->title_tab2 }}" />
                    </div>
                    <div class="row">
                        <div class="pb-4">
                            <label for="title_contact" class="form-label">Title Contact</label>
                            <input type="text" class="form-control" id="title_contact" name="title_contact" value ="{{ $contact->title_contact }}" />
                        </div>

                        <div class="pb-4">
                            <label for="subtitle_contact" class="form-label">SubTitle Contact</label>
                            <input type="text" class="form-control" id="subtitle_contact" name="subtitle_contact" value ="{{ $contact->subtitle_contact }}"/>
                        </div>
                       
                        <div class="pb-4">
                            <label for="title_career" class="form-label">Title Career</label>
                            <input type="text" class="form-control" id="title_career" name="title_career" value ="{{ $contact->title_career }}"/>
                        </div>

                        <div class="pb-4">
                            <label for="subtitle_career" class="form-label">SubTitle Career</label>
                            <input type="text" class="form-control" id="subtitle_career" name="subtitle_career" value ="{{ $contact->subtitle_career }}"/>
                        </div>
                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section 2</div>
                    </div>

                    <div class="row">
                        <div class="pb-4">
                            <label for="title_address" class="form-label">Title Address</label>
                            <input type="text" class="form-control" id="title_address" name="title_address" value ="{{ $contact->title_address }}" />
                        </div>

                        <div class="pb-4">
                            <label for="subtitle_address" class="form-label">SubTitle Address</label>
                            <input type="text" class="form-control" id="subtitle_address" name="subtitle_address" value ="{{ $contact->subtitle_address }}" />
                        </div>
                        <div class="pb-4 col-md-6">

                          @if ($contact->image_address)
                            <img src="{{ asset('assets/contact/' . $contact->image_address) }}" height="100" class="d-block">
                        @endif 
                            <label for="image_address" class="form-label">image <span class="badge bg-label-danger">Size: 731 *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="image_address" name="image_address" />
                        </div>
                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section Address 1</div>
                    </div>

                    <div class="row">
                        <div class="pb-4 col-md-6">
                           @if ($contact->icon_lb)
                            <img src="{{ asset('assets/contact/' . $contact->icon_lb) }}" height="100" class="d-block">
                         @endif 
                            <label for="icon_lb" class="form-label">Icon <span class="badge bg-label-danger">Size: 731 *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="icon_lb" name="icon_lb" />
                        </div>

                    </div>

                    <div class="row">
                        <div class="pb-4">
                            <label for="title1" class="form-label">Title </label>
                            <input type="text" class="form-control" id="title1" name="title1"  value ="{{ $contact->title1 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="location1" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location1" name="location1"  value ="{{ $contact->location1 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="phone1" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone1" name="phone1"  value ="{{ $contact->phone1 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="email1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email1" name="email1"  value ="{{ $contact->email1 }}" />
                        </div>

                        
                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section Address 2</div>
                    </div>

                    <div class="row">
                        <div class="pb-4 col-md-6">
                           @if ($contact->icon_jordan)
                            <img src="{{ asset('assets/contact/' . $contact->icon_jordan) }}" height="100" class="d-block">
                         @endif 
                            <label for="icon_jordan" class="form-label">Icon <span class="badge bg-label-danger">Size: 731 *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="icon_jordan" name="icon_jordan" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="pb-4">
                            <label for="title2" class="form-label">Title </label>
                            <input type="text" class="form-control" id="title2" name="title2" value ="{{ $contact->title2 }}"/>
                        </div>

                        <div class="pb-4">
                            <label for="location2" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location2" name="location2" value ="{{ $contact->location2 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="phone2" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone2" name="phone2" value ="{{ $contact->phone2 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="email2" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email2" name="email2" value ="{{ $contact->email2 }}" />
                        </div>
                    </div>

                    <div class="divider divider-info">
                        <div class="divider-text">Section Address 3</div>
                    </div>

                    <div class="row">
                        <div class="pb-4 col-md-6">
                           @if ($contact->icon_cyprus)
                            <img src="{{ asset('assets/contact/' . $contact->icon_cyprus) }}" height="100" class="d-block">
                         @endif 
                            <label for="icon_cyprus" class="form-label">Icon <span class="badge bg-label-danger">Size: 731 *
                                    454 px</span></label>
                            <input type="file" class="form-control" id="icon_cyprus" name="icon_cyprus" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="pb-4">
                            <label for="title3" class="form-label">Title </label>
                            <input type="text" class="form-control" id="title3" name="title3" value ="{{ $contact->title3 }}"  />
                        </div>

                        <div class="pb-4">
                            <label for="location3" class="form-label">Location</label>
                            <input type="text" class="form-control" id="location3" name="location3" value ="{{ $contact->location3 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="phone3" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone3" name="phone3" value ="{{ $contact->phone3 }}" />
                        </div>

                        <div class="pb-4">
                            <label for="email3" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email3" name="email3" value ="{{ $contact->email3 }}" />
                        </div>
                    </div>

                    <div class="pb-4">
                        <label for="title_media" class="form-label">Title Social Media</label>
                        <input type="text" class="form-control" id="title_media" name="title_media" value="{{ $contact->title_media }}"/>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
