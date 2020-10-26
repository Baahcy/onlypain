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
                    <form action="{{ route('admin-shop.update', $shops->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name"
                                        class="col-form-label text-md-right">{{ __('Product Title') }}</label>
                                    <input id="title" type="text"
                                        class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                                        name="title" placeholder="Title" value="{{ $shops->title}}" autofocus>
                                    @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price"
                                        class="col-form-label text-md-right">{{ __('Product Price') }}</label>
                                    <input id="price" type="number"
                                        class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                        name="price" placeholder="price" value="{{ $shops->price}}" autofocus>
                                    @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image"
                                        class="col-form-label text-md-right">{{ __('Product image') }}</label>
                                    <input id="image" type="file"
                                        class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                        name="image" placeholder="image" value="{{ $shops->image}}" autofocus>
                                    @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description"
                                        class="col-form-label text-md-right">{{ __(' Product Description') }}</label>
                                    <textarea id="description" name="description"
                                        class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                        placeholder="Enter Description Here">{{ $shops->description}}</textarea>
                                    @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
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
