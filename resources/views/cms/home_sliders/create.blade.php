@extends('layouts.admin')

@section('page_name')
    Create Home Slider
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('homeSliderStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="pb-4">
                        <label for="title" class="form-label">Title </label>
                        <input type="text" class="form-control" id="title" name="title" />
                    </div>

                    <div class="pb-4">
                        <label for="subtitle" class="form-label">Subtitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" />
                    </div>

                    <div class="pb-4">
                        <label for="link" class="form-label">Link Text </label>
                        <input type="text" class="form-control" id="link" name="link" />
                    </div>

                    <div class="pb-4">
                        <label for="url" class="form-label">Url</label>
                        <input type="text" class="form-control" id="url" name="url" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="background" class="form-label">Image <span class="badge bg-label-danger">Size: 1320 * 180
                                px</span></label>
                        <input type="file" class="form-control" id="background" name="background" />
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
