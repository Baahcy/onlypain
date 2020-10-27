@extends('layouts.adminapp')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Add Product to Shop</h4>
                </div>
                <div class="card-body">
                    <form action="/admin-music" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating"> Title </label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="custom-file">
                                    <label class="bmd-label-floating"> Music </label>
                                    <input type="file" name="music" class="form-control">
                                </div>
                            </div>

                            {{-- <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="inputGroupFile01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                              </div> --}}



                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating"> Artist </label>
                                    <input type="text" name="artist" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div >
                                    <label class="bmd-label-floating">Cover Image </label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="container float-left">
                                <button type="submit" class="btn btn-primary pull-right">Create</button>
                                <div class="clearfix"></div>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
