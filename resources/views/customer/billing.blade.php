@extends('layouts.admin')
@section('content')
    {{-- <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div> --}}

    <div class="page-wrapper toggled">
        @include('customer.common.sidebar')

        <main class="page-content bg-light">
            @include('customer.common.topheader')

            <div class="container-fluid">
                <div class="layout-specing">
                    @include('customer.common.pagetitle')
                    <div class="row row-cols-xl-4 row-cols-md-2 row-cols-1">
                        <div class="col mt-4">
                            <a href="#!"
                                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-file-info-alt fs-4 mb-0"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Total Invoices</h6>
                                        <p class="fs-5 text-dark fw-bold mb-0">
                                            <span>0</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mt-4">
                            <a href="#!"
                                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-usd-circle fs-4 mb-0 text-danger"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Amount Due</h6>
                                        <p class="fs-5 text-danger fw-bold mb-0">
                                            <span>৳50</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mt-4">
                            <a href="#!"
                                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-check-circle fs-4 mb-0 text-success"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Paid This Year</h6>
                                        <p class="fs-5 text-success fw-bold mb-0">
                                            <span>৳5000</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mt-4">
                            <a href="#!"
                                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-clock-eight fs-4 mb-0 text-danger"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Pending</h6>
                                        <p class="fs-5 text-danger fw-bold mb-0">
                                            <span class="counter-value" data-target="5">0</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="card shadow-sm rounded border">
                                <div class="card-body p-4">
                                    <div class="row align-items-center">
                                        <div class="col-12 col-sm">
                                            <div class="position-relative">
                                                <i class="uil uil-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted fs-5"></i>
                                                <input class="form-control form-control-lg ps-5" type="text" placeholder="Search invoices..." />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <select class="form-select bg-light">
                                                <option selected>All</option>
                                                <option>Unpaid</option>
                                                <option>Paid</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="card shadow-sm rounded">
                                <div class="card-body d-flex align-items-center justify-content-between pb-2">
                                    <div>
                                        <h5 class="mb-1">My Invoices (<span>0</span>)</h5>
                                        {{-- <p class="text-muted small mb-0">Manage and monitor your registered domains</p> --}}
                                    </div>
                                    {{-- <span class="badge rounded-pill bg-soft-success fs-6">
                                        <i class="uil uil-globe text-success"></i> 0 Domains
                                    </span> --}}
                                </div>

                                <div class="card-body pt-0">
                                    <div class="text-center py-5">
                                        <i class="uil uil-file-alt text-secondary mb-3" style="font-size:48px;"></i>
                                        <h4 class="text-dark">No invoices found</h4>
                                        <p class="text-muted small mb-3">You don't have any invoices yet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('customer.common.copyright')
        </main>
    </div>
@endsection
