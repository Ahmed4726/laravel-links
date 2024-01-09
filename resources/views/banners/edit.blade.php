@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card mt-5">
                <div class="card-body">
                    <h2 class="card-title">Editing Banner</h2>
                    <form action="{{route('banners.update',$banner->id)}}" method="post">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Banner image URL (420 x 420 px)</label>
                                    <input type="text" id="name" name="banner_link" class="form-control" placeholder="My YouTube Channel" value="{{ $banner->banner_link }}">
                                   
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Website Link URL</label>
                                    <input type="text" id="link" name="website_link" class="form-control" placeholder="https://youtube.com/user/aschmelyun" value="{{ $banner->website_link }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-2">
                                @csrf
                                <button type="submit" class="btn btn-primary{{ session('success') ? ' is-valid' : '' }}">Update banner</button>
                                @if(session('success'))
                                    <div class="valid-feedback">{{ session('success') }}</div>
                                @endif
                                <!-- <button type="button" class="btn btn-secondary"
                                        onclick="event.preventDefault(); document.getElementById('delete-form').submit();">Delete Link</button> -->
                            </div>
                        </div>
                    </form>
                  
                </div>
            </div>
        </div>
    </div>
@endsection
