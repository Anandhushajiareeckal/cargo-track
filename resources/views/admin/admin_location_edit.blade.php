@extends('layouts.admin')
@section('body')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit location</h4>
                        </div><!-- end card header -->

                        <div class="card-body">

                            <form class="tablelist-form" method="post" action="/admin-location/{{$admin_location->id}}/update" enctype="multipart/form-data">
                                @csrf   
                                @method("PUT")
                                <div class="modal-body">
    
                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Name</label>
                                        <input type="text" id="email-field" name="name" class="form-control" value="{{$admin_location->name}}" required >
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Company name</label>
                                        <input type="text" id="email-field" name="company_name" class="form-control" value="{{$admin_location->company_name}}" required >
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label"> Contact</label>
                                        <input type="text" id="email-field" name="contact" class="form-control" value="{{$admin_location->contact}}" required >
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Email</label>
                                        <input type="email" id="email-field" name="email" class="form-control" value="{{$admin_location->email}}" required >
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success" id="add-btn">Add Customer</button>
                                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection