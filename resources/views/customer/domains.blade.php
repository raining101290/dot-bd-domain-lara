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
                                        <i class="uil uil-globe fs-4 mb-0"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Total</h6>
                                        <p class="fs-5 text-dark fw-bold mb-0">
                                            <span id="totalDomains" class="counter-value" data-target="5">0</span>
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
                                        <i class="uil uil-globe fs-4 mb-0 text-success"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Active</h6>
                                        <p class="fs-5 text-dark fw-bold mb-0">
                                            <span id="activeDomains" class="counter-value" data-target="5">0</span>
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
                                        <i class="uil uil-globe fs-4 mb-0 text-danger"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Pending</h6>
                                        <p class="fs-5 text-dark fw-bold mb-0">
                                            <span id="unpaidDomains" class="counter-value" data-target="1">1</span>
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
                                        <i class="uil uil-globe fs-4 mb-0 text-danger"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Expired</h6>
                                        <p class="fs-5 text-dark fw-bold mb-0">
                                            <span id="expired" class="counter-value" data-target="0">0</span>
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
                                                <input id="domainSearch" class="form-control form-control-lg ps-5" type="text" placeholder="Search domains..." />
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-auto">
                                            <select id="statusFilter" class="form-select form-control">
                                                <option selected>All Status</option>
                                                <option>Active</option>
                                                <option>Pending</option>
                                                <option>Expired</option>
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
                                        <h5 class="mb-1">My Domains</h5>
                                        <p class="text-muted small mb-0">Manage and monitor your registered domains</p>
                                    </div>
                                    <span class="badge rounded-pill bg-soft-success fs-6">
                                        <i class="uil uil-globe text-success"></i> <span class="totalDomains">0</span> Domains
                                    </span>
                                </div>

                                <div class="card-body pt-0">
                                    <!-- Empty State (default visible) -->
                                    <div id="emptyState" class="text-center py-5">
                                        <div class="text-center py-5">
                                            <i class="uil uil-globe text-secondary mb-3" style="font-size:48px;"></i>
                                            <h4 class="text-dark">No domains found</h4>
                                            <p class="text-muted small mb-3">Get started by registering your first domain</p>

                                            <a href="/order/domain" class="btn btn-primary btn-sm d-inline-flex align-items-center">
                                                <i class="uil uil-plus fs-6 me-2"></i>
                                                Register Your First Domain
                                            </a>
                                        </div>
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
                                    <div id="paginationWrapper" class="d-flex justify-content-end mt-3"></div>
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
        if (!token) return;

        let allOrders = []; // store all orders locally for search & filter

        function renderTable(orders) {
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
                $("#domainTableWrapper").addClass("d-none");
                $("#emptyState").show();
            }
        }

        function applyFilters() {
            const search = $("#domainSearch").val().toLowerCase();
            const status = $("#statusFilter").val().toLowerCase();

            const filtered = allOrders.filter(order => {
                const matchDomain = order.domain_name.toLowerCase().includes(search);
                const matchStatus = status === "all status" || order.status.toLowerCase() === status;
                return matchDomain && matchStatus;
            });

            renderTable(filtered);
        }

        function renderPagination(data) {
            let html = "";
            data.links.forEach(link => {
                if (link.url) {
                    html += `<button class="btn btn-sm mx-1 ${link.active ? 'btn-primary' : 'btn-light'} page-btn" data-page="${link.page}">${link.label}</button>`;
                } else {
                    html += `<button class="btn btn-sm mx-1 btn-light" disabled>${link.label}</button>`;
                }
            });
            $("#paginationWrapper").html(html);
        }

        function fetchOrders(page = 1) {
            $.ajax({
                url: window.API_BASE_URL + `/domain-orders?page=${page}`,
                type: "GET",
                headers: {
                    "Authorization": "Bearer " + token,
                    "Accept": "application/json"
                },
                success: function (response) {
                    const orders = response.data.data;
                    allOrders = orders;

                    // counts
                    $(".totalDomains").text(response.data.total);
                    $("#totalDomains").text(response.data.total);
                    $("#activeDomains").text(orders.filter(o => o.status === "active").length);
                    $("#unpaidDomains").text(orders.filter(o => o.status === "pending").length);

                    renderTable(orders);
                    if(response?.data?.data?.length > 10){
                        renderPagination(response.data);
                    }
                },
                error: function () {
                    alert("Failed to load orders");
                }
            });
        }

        // Initial fetch
        fetchOrders();

        // Pagination click
        $(document).on("click", ".page-btn", function () {
            const page = $(this).data("page");
            fetchOrders(page);
        });

        // Search + Filter
        $("#domainSearch, #statusFilter").on("input change", function () {
            applyFilters();
        });
    });
    </script>

@endsection
