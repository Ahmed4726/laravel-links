@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card">
                <div class="card-body">
                    <h2 class="card-title">{{ $user->username }}'s links</h2>
                </div>
            </div>
        </div>
    </div>
@endsection