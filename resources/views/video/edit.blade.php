@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Edit Product in the Shop</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin-video.update', $videos->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Title') }}</label>
                                    <input id="title" type="text"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        name="title" placeholder="Title" value="{{ $videos->title}}" autofocus>
                                    @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image" class="col-form-label text-md-right">{{ __(' Video') }}</label>
                                    <input id="video" type="file"
                                        class="form-control{{ $errors->has('video') ? ' is-invalid' : '' }}"
                                        name="video" placeholder="video" value="{{ $videos->video}}" autofocus>
                                    @if ($errors->has('video'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('video') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                        <div class="col-md-12">

                            <div class="form-group">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary float-center">
                                        {{ __('Update Event') }}
                                    </button>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
