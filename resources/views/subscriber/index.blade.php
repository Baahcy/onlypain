@extends('layouts.adminapp')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-secondary">
                </div>
                <div class="card-header card-header-primary">
                    <div>
                        <a data-toggle="modal" data-target="#addModal" class="btn btn-primary float-right">Send News
                            Letter</a>
                    </div>
                    <h4 class="card-title ">Subscibers Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">

                        <!-- Modal -->
                        <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Composer a News Letter</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/admin-subscriber" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" name="title" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Subject</label>
                                                <input type="text" name="subject" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea name="message" class="form-control"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" name="submit" value="Send" class="btn btn-success">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Modal -->


                        <table class="table">
                            <thead class=" text-primary">
                                <th>ID </th>
                                <th> Name </th>
                                <th> Email </th>
                            </thead>
                            <tbody>
                                @foreach ($subscribers as $subscriber)
                                <tr>
                                    <td>{{ $subscriber->id }}</td>
                                    <td>{{ $subscriber->name }}</td>
                                    <td>{{ $subscriber->email }}</td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
