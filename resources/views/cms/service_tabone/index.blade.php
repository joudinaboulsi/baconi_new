@extends('layouts.admin')

@section('page_name')
   Service Tab one
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('tabOneCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title 1</th>
                            <th>Text 1</th>
                            <th>Text 2</th>
                            <th>Text 3</th>
                            <th>Icon</th>
                            <th>Image</th>
                            <th>Alt image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($services as $service)
                            <tr>
                                <td>{{$service->title1}}</td>
                                <td>{{$service->text1}}</td>
                                <td>{{$service->text2}}</td>
                                <td>{{$service->text3}}</td>
                                <td>
                                    @if ($service->icon)
                                        <img src="{{ asset('assets/sliders/' . $service->icon) }}" height="100"
                                            alt="Image">
                                    @endif
                                </td>
                               
                                <td>
                                    @if ($service->image)
                                        <img src="{{ asset('assets/sliders/' . $service->image) }}" height="100"
                                            alt="Image">
                                    @endif
                                </td>
                                <td>{{ $service->alt_image }}</td>
                               <td>
                                    <div class="d-flex">
                                        <a href="{{ route('tabOneEdit', $service->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                        <form action="{{ route('tabOneDelete', $service->id) }}" method="POST">
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
