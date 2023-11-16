@extends('layouts.admin')
@section('body')
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Add and edit Banner</h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div id="customerList">
                                <div class="row g-4 mb-3">
                                    <div class="col-sm-auto">
                                        <div>
                                            <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add</button>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="table-responsive table-card mt-3 mb-1">
                                    @if(isset($home_banner))
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                    
                                                </th>
                                                <th  data-sort="customer_name">Image</th>
                                                <th  data-sort="email">Heading 1</th>
                                                <th  data-sort="phone">Heading 2</th>
                                                <th  data-sort="date">heading 3</th>
                                                <th  data-sort="action">Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($home_banner as $home_banner)
                                        <tbody class="list form-check-all">
                                            <tr>
                                                <th scope="row">
                                                 
                                                </th>
                                                <td class="customer_name"><div class="flex-shrink-0">
                                                    <img src="{{ $home_banner->baner_img }}" alt="" height="50" class="rounded">
                                                </div></td>
                                                <td class="email">{{ $home_banner->heading_1 }}</td>
                                                <td class="phone">{{ $home_banner->heading_2 }}</td>
                                                <td class="date">{{ $home_banner->content }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="/home-banner/{{$home_banner->id}}"><button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal2">Edit</button></a>
                                                        </div>
                                                        <div class="remove">
                                                            <a href="/home-banner/{{$home_banner->id}}/delete"><button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal" onclick="return confirm('Are you sure you want to delete this item?')">Remove</button></a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                    @else
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col" style="width: 50px;">
                                                
                                            </th>
                                            <th  data-sort="customer_name">Image</th>
                                            <th  data-sort="email">Heading 1</th>
                                            <th  data-sort="phone">Heading 2</th>
                                            <th  data-sort="date">heading 3</th>
                                            <th  data-sort="action">Action</th>
                                        </tr>
                                    </thead>
                                    @endif
                                    <div class="noresult" style="display: none">
                                        <div class="text-center">
                                            <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                            <h5 class="mt-2">Sorry! No Result Found</h5>
                                            <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any orders for you search.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

            {{-- <!-- Modal -->
            <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <i class="bi bi-trash3 display-5 text-danger"></i>
                                <div class="mt-4 pt-2 fs-base mx-4 mx-sm-5">
                                    <h4>Are you Sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you Sure You want to Remove this Record ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <a href="/home-banner/{{$home_banner->id}}/delete"></a><button type="button" class="btn w-sm btn-danger " id="delete-record">Yes, Delete It!</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--end modal -->
             --}}

            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" method="post" action="/home-banner-add" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Banner image</label>
                                    <input class="form-control" name="image" required type="file" id="formFileMultiple" accept="image/*">
                                </div>

                                <div class="mb-3">
                                    <label for="email-field" class="form-label">First heading</label>
                                    <input type="text" id="email-field" required name="heading_1"  class="form-control" placeholder="First heading" required >
                                </div>

                                <div class="mb-3">
                                    <label for="phone-field" class="form-label">Second heading</label>
                                    <input type="text" id="phone-field" required name="heading_2"  class="form-control" placeholder="Second heading" required >
                                </div>

                                <div class="mb-3">
                                    <label for="date-field" class="form-label">Third heading</label>
                                    <input type="text" id="date-field" required name="content"  class="form-control" placeholder="Third heading" required >
                                </div>

                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="edit-btn">Update</button> 
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection