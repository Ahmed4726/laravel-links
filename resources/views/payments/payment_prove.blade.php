@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 card mt-5 mx-auto">
                <div class="card-body">
                    <h2 class="card-title text-center">Prove payment</h2>
                    <form action="{{route('post.payment')}}" method="post">
                        <div class="row">
                            <!-- <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="name">Link Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="My YouTube Channel">
                                </div>
                            </div> -->
                            <div class="col-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">ExploreMonero transaction receipt URL</label>
                                    <input type="text" id="link" name="link" class="form-control" pattern="^(https?:\/\/)?(www\.)?[a-zA-Z0-9-]+(\.[a-zA-Z]{2,})+(\S+)?$" placeholder="https://youtube.com/user/aschmelyun">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-2">
                                @csrf
                                <button type="submit" class="btn btn-primary{{ session('success') ? ' is-valid' : '' }}">Prove payment</button>
                                
                                @error('link')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

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
