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

                            <form class="tablelist-form" method="post" action="/home-banner/{{$home_banner->id}}/update" enctype="multipart/form-data">
                                @csrf   
                                @method("PUT")
                                <div class="modal-body">
    
                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Banner image</label>
                                        <input class="form-control" name="image"  type="file" id="formFileMultiple" value="{{$home_banner->image}} accept="image/*">
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">First heading</label>
                                        <input type="text" id="email-field" required name="heading_1"  class="form-control" placeholder="First heading" value="{{$home_banner->heading_1}}" required >
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Second heading</label>
                                        <input type="text" id="phone-field" required name="heading_2"  class="form-control" placeholder="Second heading" value="{{$home_banner->heading_2}}" required >
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="date-field" class="form-label">Third heading</label>
                                        <input type="text" id="date-field" required name="content"  class="form-control" placeholder="Third heading" value="{{$home_banner->content}}" required >
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