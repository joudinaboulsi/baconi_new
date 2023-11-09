@extends('layouts.admin')

@section('page_name')
    Memberships Sliders
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('membershipCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Alt image</th>
        
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sliders as $slider)
                            <tr>
            
                                <td>
                                    @if ($slider->image)
                                        <img src="{{ asset('assets/sliders/' . $slider->image) }}" height="100"
                                            alt="Image">
                                    @endif
                                </td>
                                <td>{{ $slider->alt_image }}</td>
                               <td>
                                    <div class="d-flex">
                                        <a href="{{ route('membershipEdit', $slider->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                        <form action="{{ route('membershipDelete', $slider->id) }}" method="POST">
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
