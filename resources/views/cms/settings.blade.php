@extends('layouts.admin')

@section('page_name') Settings Page @endsection

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="card-body">
            <form action="{{ route('settingsStore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="pb-4 col-md-6">
                        @if ($settings->logo)
                            <img src="{{ asset('assets/logo/'.$settings->logo) }}" alt="" height="100" class="d-block">
                        @endif
                        <label for="logo" class="form-label">Logo </label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>

                    <div class="pb-4 col-md-6">
                        <label for="alt_logo" class="form-label" style="margin-top: 103px;">Alt Logo</label>
                        <input type="text" class="form-control" id="alt_logo" name="alt_logo" value="{{ $settings->alt_logo }}">
                    </div>

                </div>

                <div class="row">

                    <div class="pb-4 col-md-12">
                        <label for="desc" class="form-label">Description</label>
                        <input type="text" class="form-control" id="desc" name="desc" value="{{ $settings->desc }}">
                    </div>

                    <div class="pb-4 col-md-12">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $settings->phone }}">
                    </div>
                    <div class="pb-4 col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $settings->email }}">
                    </div>

                   
                    <div class="pb-4 col-md-12">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook" value="{{ $settings->facebook }}">
                    </div>

                    <div class="pb-4 col-md-12">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $settings->instagram }}">
                    </div>

                    <div class="pb-4 col-md-12">
                        <label for="linkedin" class="form-label">LinkedIn</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ $settings->linkedin }}">
                    </div>

                  
                </div>

                <div class="demo-inline-spacing">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
