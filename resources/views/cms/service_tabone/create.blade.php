@extends('layouts.admin')

@section('page_name')
    Create Tab One
@endsection

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('tabOneStore') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="pb-4">
                        <label for="title1" class="form-label">Title 1</label>
                        <input type="text" class="form-control" id="title1" name="title1" />
                    </div>

                    <div class="pb-4">
                        <label for="text1" class="form-label">Text 1</label>
                        <input type="text" class="form-control" id="text1" name="text1" />
                    </div>

                    <div class="pb-4">
                        <label for="text2" class="form-label">Text 2</label>
                        <input type="text" class="form-control" id="text2" name="text2" />
                    </div>

                    <div class="pb-4">
                        <label for="text3" class="form-label">Text 3</label>
                        <input type="text" class="form-control" id="text3" name="text3" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="icon" class="form-label">Icon <span class="badge bg-label-danger">Size: 1320 * 180
                                px</span></label>
                        <input type="file" class="form-control" id="icon" name="icon" />
                    </div>


                    <div class="pb-4 col-md-6">
                        <label for="image" class="form-label">Image <span class="badge bg-label-danger">Size: 1320 * 180
                                px</span></label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4">
                        <label for="alt_image" class="form-label">Alt image</label>
                        <input type="text" class="form-control" id="alt_image" name="alt_image" />
                    </div>


                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
