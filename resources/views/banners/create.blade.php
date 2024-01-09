@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card mt-5 mx-auto">
                <div class="card-body">
                    <h2 class="card-title">Create a new banner</h2>
                    <form action="{{route('save.banner')}}" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Banner image URL (420 x 420 px)</label>
                                    <input type="text" id="name" name="banner_link" class="form-control" placeholder="My Banner URL">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Website link URL</label>
                                    <input type="text" id="link" name="website_link" class="form-control" placeholder="https://youtube.com/user/aschmelyun">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-2">
                                @csrf
                                <button type="submit" class="btn btn-primary{{ session('success') ? ' is-valid' : '' }}">Save Banner</button>
                                @if(session('success'))
                                    <div class="valid-feedback">{{ session('success') }}</div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
