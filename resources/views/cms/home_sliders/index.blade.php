@extends('layouts.admin')

@section('page_name')
    Home Sliders
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-header">
            <a href="{{ route('homeSliderCreate') }}" class="btn btn-primary">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Subtitle</th>
                            <th>Link</th>
                            <th>Url</th>
                            <th>Background</th>

                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>{{ $slider->title }}</td>
                                <td>{{ $slider->subtitle }}</td>

                                <td>{{ $slider->link }}</td>
                                <td>{{ $slider->url }}</td>
                                <td>
                                    @if ($slider->background)
                                        <img src="{{ asset('assets/sliders/' . $slider->background) }}" height="100"
                                            alt="Image">
                                    @endif
                                </td>

                               <td>
                                    <div class="d-flex">
                                        <a href="{{ route('homeSliderEdit', $slider->id) }}" class="btn btn-outline-success me-2">Edit</a>
                                        <form action="{{ route('homeSliderDelete', $slider->id) }}" method="POST">
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
