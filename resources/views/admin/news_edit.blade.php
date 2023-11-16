@extends('layouts.admin')
@section('body')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Edit news</h4>
                        </div><!-- end card header -->

                        <div class="card-body">

                            <form class="tablelist-form" method="post" action="/admin-news/{{$admin_news->id}}/update" enctype="multipart/form-data">
                                @csrf   
                                @method("PUT")
                                <div class="modal-body">
    
                                    <div class="mb-3">
                                        <label for="formFileMultiple" class="form-label">Image</label>
                                        <input class="form-control" name="image"  type="file" id="formFileMultiple" value="{{$admin_news->image}}" accept="image/*">
                                    </div>

                                    <div class="mb-3">
                                        <label for="email-field" class="form-label">Heading</label>
                                        <input type="text" id="email-field" name="heading" class="form-control" value="{{$admin_news->heading}}" required >
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="phone-field" class="form-label">Content</label>
                                        <textarea  name="content" class="form-control" cols="30" rows="10" maxlength="400">{{$admin_news->content}}</textarea>
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