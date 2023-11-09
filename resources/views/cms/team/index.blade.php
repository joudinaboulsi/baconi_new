@extends('layouts.admin')

@section('page_name')
    Team Sliders
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('teamCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Image</th>
                            <th>Alt image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{$slider->name}}</td>
                                <td>{{$slider->position}}</td>
                                <td>
                                    @if ($slider->image)
                                        <img src="{{ asset('assets/sliders/' . $slider->image) }}" height="100"
                                            alt="Image">
                                    @endif
                                </td>
                                <td>{{ $slider->alt_image }}</td>
                               <td>
                                    <div class="d-flex">
                                        <a href="{{ route('teamEdit', $slider->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                        <form action="{{ route('teamDelete', $slider->id) }}" method="POST">
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
</div>
 
@endsection
