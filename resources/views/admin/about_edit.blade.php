@extends('layouts.admin')
@section('body')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit Who we are</h4>
                        </div><!-- end card header -->

                        <div class="card-body">

                            <form class="tablelist-form" method="post" action="/admin-about/1/update" enctype="multipart/form-data">
                                @csrf   
                                @method("PUT")
                                <div class="modal-body">
    
    
                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Heading</label>
                                        <input type="text" id="email-field" name="heading" class="form-control" value="{{$about_banner->heading}}" required >
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Content 1</label>
                                        <textarea  name="content_1" class="form-control" cols="30" rows="10" maxlength="400">{{$about_banner->content_1}}</textarea>
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">Content 2 </label>
                                        <textarea name="content_2" class="form-control"  cols="10" rows="10" maxlength="400">{{$about_banner->content_2}}</textarea>
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
