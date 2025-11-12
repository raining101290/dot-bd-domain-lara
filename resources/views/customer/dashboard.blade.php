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
                            <a href="/customer/domains"
                                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-globe fs-4 mb-0"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Total Domains</h6>
                                        <p class="fs-5 text-dark fw-bold mb-0">
                                            <span id="totalDomains" class="counter-value" data-target="0">0</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mt-4">
                            <a href="/customer/domains"
                                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-globe fs-4 mb-0 text-success"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Active Domains</h6>
                                        <p class="fs-5 text-dark fw-bold mb-0">
                                            <span id="activeDomains" class="counter-value" data-target="0">0</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mt-4">
                            <a href="/customer/billing"
                                class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-file-info-alt fs-4 mb-0 text-danger"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Unpaid Invoices</h6>
                                        <p class="fs-5 text-dark fw-bold mb-0">
                                            <span id="unpaidInvoices" class="counter-value" data-target="0">0</span>
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
                                        <p class="fs-5 text-dark fw-bold mb-0">
                                            <span id="amountDue">৳0</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 mt-4">
                            <div class="card shadow-sm rounded">
                                <div class="card-body pb-2">
                                    <h5 class="card-title mb-1">Quick Actions</h5>
                                    <p class="text-muted small">Access frequently used features</p>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="row g-3 text-center">
                                        <div class="col-6 col-sm-3">
                                            <a href="/order/domain"
                                                class="btn w-100 py-3 d-flex flex-column align-items-center quick-btn text-primary">
                                                <i class="uil uil-plus fs-4 mb-0"></i>
                                                <span class="small fw-medium">Register Domain</span>
                                            </a>
                                        </div>

                                        <div class="col-6 col-sm-3">
                                            <a href="/customer/billing"
                                                class="btn w-100 py-3 d-flex flex-column align-items-center quick-btn text-success">
                                                <i class="uil uil-usd-circle fs-4 mb-0"></i>
                                                <span class="small fw-medium">Billing</span>
                                            </a>
                                        </div>

                                        <div class="col-6 col-sm-3">
                                            <a href="/contact"
                                                class="btn w-100 py-3 d-flex flex-column align-items-center quick-btn text-warning">
                                                <i class="uil uil-question fs-4 mb-0"></i>
                                                <span class="small fw-medium">Support</span>
                                            </a>
                                        </div>

                                        <div class="col-6 col-sm-3">
                                            <a href="/customer/profile"
                                                class="btn w-100 py-3 d-flex flex-column align-items-center quick-btn text-secondary">
                                                <i class="uil uil-setting fs-4 mb-0"></i>
                                                <span class="small fw-medium">Settings</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-6 mt-4">
                            <div class="card shadow-sm rounded">
                                <div class="card-body d-flex align-items-center justify-content-between pb-2">
                                    <div>
                                        <h5 class="mb-1">My Domains</h5>
                                        <p class="text-muted small mb-0">Manage and monitor your registered domains</p>
                                    </div>

                                    <a href="/customer/domains" class="btn btn-light btn-sm d-flex align-items-center">
                                        View All
                                        <i class="uil uil-arrow-up-right fs-6 mb-0 ms-1"></i>
                                    </a>
                                </div>

                                <div class="card-body pt-0">
                                    <!-- Empty State (default visible) -->
                                    <div id="emptyState" class="text-center py-5">
                                        <i class="uil uil-globe text-secondary mb-3" style="font-size:48px;"></i>
                                        <p class="text-muted small mb-1">You don't have any domains yet.</p>
                                        <p class="text-muted small mb-3">Start by registering your first domain</p>

                                        <a href="/order/domain" class="btn btn-primary btn-sm d-inline-flex align-items-center">
                                            <i class="uil uil-plus fs-6 me-2"></i>
                                            Register Your First Domain
                                        </a>
                                    </div>

                                    <!-- Domain Table (hidden by default) -->
                                    <div id="domainTableWrapper" class="table-responsive d-none">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Domain</th>
                                                    <th>Years</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody id="orderTableBody"></tbody>
                                        </table>
                                    </div>
                                    {{-- <div class="text-center py-5">
                                        <i class="uil uil-globe text-secondary mb-3" style="font-size:48px;"></i>
                                        <p class="text-muted small mb-1">You don't have any domains yet.</p>
                                        <p class="text-muted small mb-3">Start by registering your first domain</p>

                                        <a href="/order/domain" class="btn btn-primary btn-sm d-inline-flex align-items-center">
                                            <i class="uil uil-plus fs-6 me-2"></i>
                                            Register Your First Domain
                                        </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-4">
                            <div class="card shadow-sm rounded">
                                <div class="card-body d-flex align-items-center justify-content-between pb-2">
                                    <div>
                                        <h5 class="mb-1">Recent Invoices</h5>
                                        <p class="text-muted small mb-0">Your latest invoices and transactions</p>
                                    </div>

                                    <a href="/customer/billing" class="btn btn-light btn-sm d-flex align-items-center">
                                        View All
                                        <i class="uil uil-arrow-up-right ms-1"></i>
                                    </a>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="text-center py-5">
                                        <i class="uil uil-chart-line text-secondary mb-3" style="font-size:48px;"></i>

                                        <p class="text-muted mb-1">No recent activity</p>
                                        <p class="text-muted small mb-3">Your invoices will appear here</p>
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
    <script>
    $(document).ready(function () {
        const token = localStorage.getItem("token");

        if (!token) {
            return;
        }

        $.ajax({
            url: "http://127.0.0.1:8001/api/domain-orders",
            type: "GET",
            headers: {
                "Authorization": "Bearer " + token,
                "Accept": "application/json"
            },
            success: function (response) {
                const orders = response.data.data;

                // Set counts
                const totalDomains = orders.length;
                const activeDomains = orders.filter(o => o.status === "active").length;
                const unpaidInvoices = orders.filter(o => o.status === "pending").length;
                const amountDue = orders
                    .filter(o => o.status === "pending")
                    .reduce((sum, o) => sum + parseFloat(o.amount), 0);

                // Update UI
                $("#totalDomains").attr("data-target", totalDomains).text(totalDomains);
                $("#activeDomains").attr("data-target", activeDomains).text(activeDomains);
                $("#unpaidInvoices").attr("data-target", unpaidInvoices).text(unpaidInvoices);
                $("#amountDue").text("৳" + amountDue.toFixed(2));

                if (orders.length > 0) {
                    $("#emptyState").hide();
                    $("#domainTableWrapper").removeClass("d-none");

                    let html = "";
                    orders.forEach(order => {
                        html += `
                        <tr>
                            <td>${order.id}</td>
                            <td>${order.domain_name}</td>
                            <td>${order.years} Year(s)</td>
                            <td>${order.amount}</td>
                            <td><span class="badge bg-primary">${order.status}</span></td>
                        </tr>`;
                    });

                    $("#orderTableBody").html(html);
                } else {
                    // No data → show empty design
                    $("#domainTableWrapper").addClass("d-none");
                    $("#emptyState").show();
                }
            },
            error: function (xhr) {
                console.error(xhr.responseJSON);
                alert("Failed to load orders");
            }
        });
    });
    </script>
@endsection
