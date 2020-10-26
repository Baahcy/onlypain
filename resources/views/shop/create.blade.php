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
                <form action="/admin-shop" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating"> Product Title </label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Product Price </label>
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div>
                                    <label for="image">Product Image</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                </div>
                            </div>


                        </div>
                        <br>
                        <label>Product Description</label>
                        <textarea class="form-control" name="description"></textarea>
                        <button type="submit" class="btn btn-primary pull-right">ADD</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
