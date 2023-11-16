@extends('layouts.admin')
@section('body')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-3">
                    <div class="card card-height-100">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="card-title flex-grow-1 mb-0">Total Leads</h6>
                            <div class="dropdown card-header-dropdown flex-shrink-0">
                                <a class="text-reset dropdown-btn fs-md" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted">This Month<i class="ti ti-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">This Month</a>
                                    <a class="dropdown-item" href="#">Last Month</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="usersActivity" data-colors='["--tb-primary", "--tb-primary-rgb, 0.75"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-3">
                    <div class="card card-height-100">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="card-title flex-grow-1 mb-0">Session by Device Type</h6>
                            <div class="flex-shrink-0">
                                <a class="btn btn-primary btn-sm" href="#!">
                                    View More <i class="ti ti-arrow-narrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4><span class="counter-value" data-target="5634">0</span>k </h4>
                            <p class="text-muted">Total Device website visitor</p>
                            <div class="progress mb-4" style="height: 34px;">
                                <div class="progress-bar" data-bs-toggle="tooltip" data-bs-title="Mobile" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-success" data-bs-toggle="tooltip" data-bs-title="Tables" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-info" data-bs-toggle="tooltip" data-bs-title="Laptop" role="progressbar" style="width: 37%" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-warning" data-bs-toggle="tooltip" data-bs-title="Others" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <div class="card border-4 border-bottom border-primary mb-0">
                                        <div class="card-body text-center">
                                            <h6 class="fs-lg mb-2"><span class="counter-value" data-target="1523">0</span>k</h6>
                                            <p class="mb-0 fs-md text-muted">Mobile</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-sm-6">
                                    <div class="card border-4 border-bottom border-success mb-0">
                                        <div class="card-body text-center">
                                            <h6 class="fs-lg mb-2"><span class="counter-value" data-target="1279">0</span>k</h6>
                                            <p class="mb-0 fs-md text-muted">Tables</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-sm-6">
                                    <div class="card border-4 border-bottom border-info mb-0">
                                        <div class="card-body text-center">
                                            <h6 class="fs-lg mb-2"><span class="counter-value" data-target="1895">0</span>k</h6>
                                            <p class="mb-0 fs-md text-muted">Laptop</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="col-sm-6">
                                    <div class="card border-4 border-bottom border-warning mb-0">
                                        <div class="card-body text-center">
                                            <h6 class="fs-lg mb-2"><span class="counter-value" data-target="873">0</span>k</h6>
                                            <p class="mb-0 fs-md text-muted">Others</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-3">
                    <div class="card card-height-100">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="card-title flex-grow-1 mb-0">Sales Per Week</h6>
                            <div class="flex-shrink-0">
                                <a class="btn btn-subtle-secondary btn-sm" href="#!">
                                    View More <i class="ti ti-arrow-narrow-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="shades_heatmap" data-colors='["--tb-info-rgb, 0.7", "--tb-info-rgb, 0.35"]' class="apex-charts ms-n3" dir="ltr"></div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-xl-3">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="card-title flex-grow-1 mb-0">Satisfaction Rate</h6>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots fs-md"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="semi_radialbar" data-colors='["--tb-secondary"]' class="apex-charts" dir="ltr"></div>
                        </div>  
                    </div>
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h6 class="card-title flex-grow-1 mb-0">Returning Customer Rate</h6>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <button class="btn shadow-none btn-sm btn-icon" type="button" data-bs-toggle="dropdown">
                                        <i class="ti ti-dots fs-md"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5><span class="counter-value" data-target="2816">0</span>k </h5>
                            <div class="progress bg-light">
                                <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex mt-2 align-items-center fs-md">
                                <p class="mb-0 flex-grow-1"><i class="ti ti-rotate-rectangle fs-xs text-primary"></i> Returning</p>
                                <p class="mb-0"><i class="ti ti-rotate-rectangle fs-xs text-success"></i> New</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> © Vixon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design & Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

@endsection