@extends('layouts.admin')
@section('body')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Add and edit location</h4>
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
                                    @if(isset($admin_location))
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                </th>
                                                <th  data-sort="customer_name">Name</th>
                                                <th  data-sort="email">Company name </th>
                                                <th  data-sort="phone">Contact</th>
                                                <th  data-sort="phone">email</th>
                                                <th  data-sort="action">Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($admin_location as $admin_location)
                                        <tbody class="list form-check-all">
                                            <tr>
                                                <th scope="row">
                                                </th>
                                                <td class="email">{{ $admin_location->name }}</td>
                                                <td class="email">{{ $admin_location->company_name }}</td>
                                                <td class="email">{{ $admin_location->contact }}</td>
                                                <td class="phone">{{ $admin_location->email }}</td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="/admin-location/{{$admin_location->id}}"><button class="btn btn-sm btn-success edit-item-btn" >Edit</button>
                                                        </div>
                                                        <div class="remove">
                                                            <a href="/admin-location/{{$admin_location->id}}/delete"><button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal"onclick="return confirm('Are you sure you want to delete this item?')">Remove</button></a>
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
                                                <th  data-sort="customer_name">Name</th>
                                                <th  data-sort="email">Company name </th>
                                                <th  data-sort="phone">Contact</th>
                                                <th  data-sort="phone">email</th>
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

           

            <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-light p-3">
                            <h5 class="modal-title" id="exampleModalLabel">Add Locations</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                        </div>
                        <form class="tablelist-form" method="post" action="/admin-location-add" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">

                                <div class="mb-3">
                                    <label for="email-field" class="form-label"> Name</label>
                                    <input type="text" id="email-field" required name="name"  class="form-control" placeholder="Name" required >
                                </div>

                                <div class="mb-3">
                                    <label for="email-field" class="form-label">Company name </label>
                                    <input type="text" id="email-field" required name="company_name"  class="form-control" placeholder="Company name" required >
                                </div>

                                <div class="mb-3">
                                    <label for="phone-field" class="form-label">Contact</label>
                                    <input type="text" id="phone-field" required name="contact"  class="form-control" placeholder="Contact" required >
                                </div>
                                
                                <div class="mb-3">
                                    <label for="phone-field" class="form-label">Email</label>
                                    <input type="text" id="phone-field" required name="email"  class="form-control" placeholder="Email" required >
                                </div>


                                

                            </div>
                            <div class="modal-footer">
                                <div class="hstack gap-2 justify-content-end">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success" id="add-btn">Update</button>
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