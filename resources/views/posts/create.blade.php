@extends('layouts.app')


@section('content')
<div class="container">
<form action="/p" enctype="multipart/form-data" method="post">
@csrf
    <div class = "row">
        
        <div class="row mb-3">
            <label for="caption" class="col-md-4 col-form-label text-md-right">post caption</label>

            <div class="col-md-6">
                <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" caption="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus name="caption">

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
    </div>
    <div class="row">
        <label for="image" class="col-md-4 col-form-label text-md-right">post image</label>
        <input type="file" class="form-control-file" name="image" id="image">
        @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

    </div>
    <div class="row pt-3">
        <button class="btn btn-primary" style="max-width: fit-content;"> add new post</button>
    </div>

</form> 



</div>
@endsection
