@extends('layouts.admin')

@section('page_name') Blog @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="card">
        <h5 class="card-header">Blog Page Info</h5>
        <div class="card-body">
            <form action="{{ route('blogStore') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="pb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $page->title }}" />
                </div>

        
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

    <div class="divider divider-info">
        <div class="divider-text">Blogs List</div>
    </div>

    <div class="card">
        <div class="card-header">
            <a href="{{ route('blogDetailCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Created by</th>
                            <th>Date</th>
                       
                            <th>Content</th>
                            <th>Image</th>
                            <th>Alt Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                      <tbody class="table-border-bottom-0">
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->by }}</td>
                                <td>{{ $blog->date }}</td>

                                <td>{!! $blog->text_blog !!}</td>
                                
                                <td>{{ $blog->alt_image_box }}</td>
                                <td>
                                    @if ($blog->image)
                                        <img src="{{ asset('assets/blog/'.$blog->image) }}" height="100" alt="Image">
                                    @endif
                                </td>
                                <td>{{ $blog->alt_image }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('blogDetailEdit', $blog->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                        <form action="{{ route('blogDetailDelete', $blog->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="divider divider-info">
        <div class="divider-text">Related</div>
    </div>

    <div class="card">
        <h5 class="card-header">Related Blogs Info</h5>
        <div class="card-body">
            <form action="{{ route('relatedContentStore') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="pb-4">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $related->title }}" />
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
