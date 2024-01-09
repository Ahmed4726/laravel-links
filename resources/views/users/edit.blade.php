@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 card mt-5">
                <div class="card-body">
                    <h2 class="card-title">Editing user settings</h2>
                    <form action="/dashboard/settings" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bio">Add your bio</label>
                                <textarea id="bio" name="bio" class="form-control{{ $errors->first('bio') ? ' is-invalid' : '' }}" placeholder="Enter your bio here">{{ $user->bio }}</textarea>
                                @if($errors->first('bio'))
                                    <div class="invalid-feedback">{{ $errors->first('bio') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="profileLink">Profile Picture Link</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="profileLink" name="profile_link" placeholder="Enter image URL" value="{{ $user->profile_link }}">
                                </div>
                            </div>
                        </div>   
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="background_color">Background Color</label>
                                    <input type="text" id="background_color" name="background_color" class="form-control{{ $errors->first('background_color') ? ' is-invalid' : '' }}" placeholder="#ffffff" value="{{ $user->background_color }}">
                                    @if($errors->first('background_color'))
                                        <div class="invalid-feedback">{{ $errors->first('background_color') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="text_color">Text Color</label>
                                    <input type="text" id="text_color" name="text_color" class="form-control{{ $errors->first('text_color') ? ' is-invalid' : '' }}" placeholder="#000000" value="{{ $user->text_color }}">
                                    @if($errors->first('text_color'))
                                        <div class="invalid-feedback">{{ $errors->first('text_color') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-2">
                                @csrf
                                <button type="submit" class="btn btn-primary{{ session('success') ? ' is-valid' : '' }}">Save Settings</button>
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
    <script>
    function displayFileName() {
        const fileInput = document.getElementById('file');
        const filenameDisplay = document.getElementById('filename');
        filenameDisplay.innerText = fileInput.files[0].name;
    }
</script>     
@endsection
