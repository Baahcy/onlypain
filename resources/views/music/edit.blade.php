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
                    <form action="{{ route('admin-music.update', $musics->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Title') }}</label>
                                    <input id="title" type="text"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        name="title" placeholder="Title" value="{{ $musics->title}}" autofocus>
                                    @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price" class="col-form-label text-md-right">{{ __('Artist') }}</label>
                                    <input id="artist" type="text"
                                        class="form-control{{ $errors->has('artist') ? ' is-invalid' : '' }}"
                                        name="artist" placeholder="artist" value="{{ $musics->artist}}" autofocus>
                                    @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image" class="col-form-label text-md-right">{{ __(' Image') }}</label>
                                    <input id="image" type="file"
                                        class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                        name="image" placeholder="image" value="{{ $musics->image}}" autofocus>
                                    @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            {{-- <div class="col-md-12">
                                <div class="form-group">
                                    <label for="music" class="col-form-label text-md-right">{{ __(' Music') }}</label>
                                    <textarea id="music" name="music"
                                        class="form-control{{ $errors->has('music') ? ' is-invalid' : '' }}"
                                        placeholder="Enter Description Here">{{ $musics->music}}</textarea>
                                    @if ($errors->has('music'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('music') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="custom-file">
                                    <label class="bmd-label-floating"> Music </label>
                                    <input type="file" name="music" class="form-control" value="{{ $musics->music}}">
                                </div>
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
