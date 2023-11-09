@extends('layouts.admin')

@section('page_name') Create Blog Detail @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('blogDetailStore') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="pb-4">
                    <label for="title" class="form-label">Title Page</label>
                    <input type="text" class="form-control" id="title" name="title" />
                </div>

                <div class="pb-4">
                    <label for="date" class="form-label">Date</label>
                    <input type="date" class="form-control" id="date" name="date" />
                </div>

                

                <div class="pt-3 pb-3">
                    <label for="by" class="form-label">Created By</label>
                    <input type="text" class="form-control" id="by" name="by" />
                
                </div>

                <div class="pt-3 pb-3">
                    <label for="title1" class="form-label">subtitle 1</label>
                    <input type="text" class="form-control" id="title1" name="title1" />
                </div>

                <div class="pt-3 pb-3">
                    <label for="title2" class="form-label">subtitle 2</label>
                    <input type="text" class="form-control" id="title2" name="title2" />
                </div>

                <div class="pt-3 pb-3">
                    <label for="title3" class="form-label">subtitle 3</label>
                    <input type="text" class="form-control" id="title3" name="title3" />
                </div>

                <div class="pt-3 pb-3">
                    <label for="title4" class="form-label">subtitle 4</label>
                    <input type="text" class="form-control" id="title4" name="title4" />
                </div>

                <div class="pt-3 pb-3">
                    <label for="title4" class="form-label">subtitle 4</label>
                    <input type="text" class="form-control" id="title4" name="title4" />
                </div>

                <div class="pt-3 pb-3">
                    <label for="title5" class="form-label">subtitle 5</label>
                    <input type="text" class="form-control" id="title5" name="title5" />
                </div>

                <div class="pt-3 pb-3">
                    <label for="title6" class="form-label">subtitle 6</label>
                    <input type="text" class="form-control" id="title6" name="title6" />
                </div>

                <div class="pt-3 pb-3">
                    <label for="title7" class="form-label">subtitle 7</label>
                    <input type="text" class="form-control" id="title7" name="title7" />
                </div>

                <div class="pt-3 pb-3">
                    <label for="title8" class="form-label">subtitle 8</label>
                    <input type="text" class="form-control" id="title8" name="title8" />
                </div>

                <div class="row">
                    <div class="pb-4 col-md-6">
                        <label for="image" class="form-label">Image <span class="badge bg-label-danger">Size: 1320 * 180 px</span></label>
                        <input type="file" class="form-control" id="image" name="image" />
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt_image" class="form-label">Alt Image</label>
                        <input type="text" class="form-control" id="alt_image" name="alt_image" />
                    </div>
                </div>

                <div class="pb-4">
                    <label for="text_blog" class="form-label">Content</label>
                    <textarea class="form-control" id="text_blog" name="text_blog"></textarea>
                </div>

                <div class="pb-4">
                    <label for="meta_keywords" class="form-label">Meta Keywords</label>
                    <textarea class="form-control" id="meta_keywords" name="meta_keywords"></textarea>
                </div>

                <div class="pb-4">
                    <label for="meta_description" class="form-label">Meta Description</label>
                    <textarea class="form-control" id="meta_description" name="meta_description"></textarea>
                </div>

                <div class="pb-4">
                    <label for="og_image" class="form-label">OG Image</label>
                    <input class="form-control" type="file" id="og_image" name="og_image" />
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
