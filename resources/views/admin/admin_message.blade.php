@extends('layouts.admin')
@section('body')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Contact  messages</h4>
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
                                    @if(isset($admin_message))
                                    <table class="table align-middle table-nowrap" id="customerTable">
                                        <thead class="table-light">
                                            <tr>
                                                <th scope="col" style="width: 50px;">
                                                </th>
                                                <th  data-sort="name">Name</th>
                                                <th  data-sort="email">email</th>
                                                <th  data-sort="phone">Phone</th>
                                                <th  >Message</th>
                                                <th  >Action</th>
                                                {{-- <th  data-sort="action">Action</th> --}}
                                            </tr>
                                        </thead>
                                        @foreach ($admin_message as $admin_message)
                                        <tbody class="list form-check-all">
                                            <tr>
                                                <th scope="row">
                                                </th>
                                                <td class="email">{{ $admin_message->name }}</td>
                                                <td class="email">{{ $admin_message->email }}</td>
                                                <td class="email">{{ $admin_message->phone }}</td>
                                                <td class="">{{ $admin_message->message }}</td>
                                                <td>
                                                    <div class="remove">
                                                        <a href="/message-store/{{$admin_message->id}}/delete"><button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal" onclick="return confirm('Are you sure you want to delete this item?')">Remove</button></a>
                                                    </div>
                                                </td>
                                                {{-- <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="/admin-location/{{$admin_message->id}}"><button class="btn btn-sm btn-success edit-item-btn" >Edit</button>
                                                        </div>
                                                        <div class="remove">
                                                            <a href="/admin-location/{{$admin_message->id}}/delete"><button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button></a>
                                                        </div>
                                                    </div>
                                                </td> --}}
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
                                    
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->

        </div>
    </div>
</div>

@endsection