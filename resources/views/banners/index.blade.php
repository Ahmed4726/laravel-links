@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card mt-5 mb-3">
                <div class="card-body">
                    <h2 class="card-title">Your Banners</h2>
                    <table class="table table-striped">
                        @if (count($banners)>0)
                        <thead>
                            <tr>
                                <th scope="col">Banner image</th>
                                <th scope="col">Website URL</th>
                                <!-- <th scope="col">Visits</th>
                                <th scope="col">Last Visit</th> -->
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        @endif
                        <tbody>
                            @foreach($banners as $banner)
                                <tr>
                                    <td><img src="{{ asset($banner->banner_link) }}" alt="Profile Image" class="mb-3 rounded-circle profile-pic" width="100" height="100"></td>
                                    <td>{{$banner->website_link}}</td>
                                    <td><a href="{{ route('banners.edit', $banner->id) }}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-12 card mt-5">
                <div class="card-body">
                    <h2 class="card-title">Your Banners</h2>
                    <a href="{{ route('add.banner') }}" class="btn btn-secondary">Add Banner</a>
                    <a href="https://trocador.app/en/anonpayurlgenerator" class="btn btn-primary" target="_blank">Buy Placement</a>
                    <a href="{{ route('prove.payment') }}" class="btn btn-primary">Prove payment</a>
                </div>
            </div>
        </div>
    </div> -->
@endsection
