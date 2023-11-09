@extends('layouts.admin')

@section('page_name')
    Create Principle Slider
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('companySliderStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="pb-4 col-md-6">
                        <label for="image" class="form-label">Image <span class="badge bg-label-danger">Size: 1320 * 180
                                px</span></label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>


                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
