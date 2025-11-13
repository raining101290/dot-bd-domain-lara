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
                                                    <th>SL</th>
                                                    <th>Domain</th>
                                                    <th>Years</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody id="orderTableBody"></tbody>
                                        </table>
                                    </div>
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
                                    <!-- Empty state -->
                                    <div id="noInvoices" class="text-center py-5">
                                        <i class="uil uil-chart-line text-secondary mb-3" style="font-size:48px;"></i>
                                        <p class="text-muted mb-1">No recent activity</p>
                                        <p class="text-muted small mb-3">Your invoices will appear here</p>
                                    </div>

                                    <!-- Table -->
                                    <div id="invoiceTableWrapper" class="table-responsive d-none">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Invoice No</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="invoiceTableBody"></tbody>
                                        </table>
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
    {{-- <script>
    $(document).ready(function () {
        const token = localStorage.getItem("token");

        if (!token) {
            return;
        }
        $.ajax({
            url: window.API_BASE_URL + "/orders?limit=5",
            type: "GET",
            headers: {
                "Authorization": "Bearer " + token,
                "Accept": "application/json"
            },
            success: function (response) {
                const orders = response.data.data;

                // Set counts
                const totalDomains = response.data.total;
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
                            <td><span class="badge bg-warning">${order.status?.toUpperCase()}</span></td>
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
            }
        });
    });
    </script> --}}
    <script>
    $(document).ready(function () {
        const token = localStorage.getItem("token");
        if (!token) return;

        const headers = {
            "Authorization": "Bearer " + token,
            "Accept": "application/json"
        };

        // --- 1️⃣ Load dashboard summary ---
        $.ajax({
            url: window.API_BASE_URL + "/profile/dashboard-summary",
            type: "GET",
            headers: headers,
            success: function (response) {
                if (!response.success) return;

                const data = response.data;

                // Update summary cards
                $("#totalDomains").attr("data-target", data.domains.total).text(data.domains.total);
                $("#activeDomains").attr("data-target", data.domains.active).text(data.domains.active);
                $("#unpaidInvoices").attr("data-target", data.invoices.unpaid_count).text(data.invoices.unpaid_count);
                $("#amountDue").text("৳" + parseFloat(data.invoices.amount_due).toFixed(2));

                // You can also display customer info if needed
                $("#customerName").text(data.user.full_name);
            },
            error: function (xhr) {
                console.error("Dashboard summary error:", xhr.responseJSON);
            }
        });


        // --- 2️⃣ Load domain orders table ---
        $.ajax({
            url: window.API_BASE_URL + "/orders?limit=5",
            type: "GET",
            headers: headers,
            success: function (response) {
                const orders = response.data.data;

                if (orders && orders.length > 0) {
                    $("#emptyState").hide();
                    $("#domainTableWrapper").removeClass("d-none");

                    let html = "";
                    orders.forEach((order,index) => {
                        html += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${order.domain_name}</td>
                                <td>${order.years} Year(s)</td>
                                <td>৳${parseFloat(order.amount).toFixed(2)}</td>
                                <td><span class="badge bg-${getStatusColor(order.status)}">${order.status?.toUpperCase()}</span></td>
                            </tr>`;
                    });

                    $("#orderTableBody").html(html);
                } else {
                    $("#domainTableWrapper").addClass("d-none");
                    $("#emptyState").show();
                }
            },
            error: function (xhr) {
                console.error("Orders error:", xhr.responseJSON);
            }
        });


        // Helper: badge color by status
        function getStatusColor(status) {
            switch (status) {
                case "active": return "success";
                case "pending": return "warning";
                case "rejected": return "danger";
                case "cancelled": return "secondary";
                default: return "info";
            }
        }
    });
    </script>
    <script>
        $(document).ready(function() {
            const token = localStorage.getItem("token");
            if (!token) return; // no token → skip

            function getInvoiceArray(response) {
                // response.data may be:
                // 1) an array (older/unusual API)
                // 2) a pagination object { data: [...], current_page: ..., ... }
                // 3) an object (single invoice) — handle defensively
                const payload = response.data;

                if (!payload) return [];

                if (Array.isArray(payload)) {
                    return payload;
                }

                if (payload.data && Array.isArray(payload.data)) {
                    return payload.data;
                }

                // fallback: if payload itself looks like an invoice object, return single-item array
                if (typeof payload === 'object') {
                    // If it has invoice_no or id assume single invoice object
                    if (payload.id || payload.invoice_no) return [payload];
                }

                return [];
            }

            function formatDate(isoStr) {
                try {
                    return new Date(isoStr).toLocaleDateString();
                } catch (e) {
                    return isoStr || '';
                }
            }

            // Fetch invoices
            $.ajax({
                url: `${window.API_BASE_URL}/my-invoices`,
                type: "GET",
                headers: {
                    "Authorization": "Bearer " + token,
                    "Accept": "application/json"
                },
                success: function(response) {
                    const invoices = getInvoiceArray(response);

                    if (invoices.length === 0) {
                        $("#invoiceTableWrapper").addClass("d-none");
                        $("#noInvoices").removeClass("d-none");
                        return;
                    }

                    $("#noInvoices").addClass("d-none");
                    $("#invoiceTableWrapper").removeClass("d-none");

                    // render only first 5
                    const items = invoices.slice(0, 5);

                    let html = "";
                    items.forEach((inv,index) => {
                        const domain = inv.order?.domain_name || "N/A";
                        const date = formatDate(inv.created_at || inv.updated_at);
                        const status = (inv.status || '').toLowerCase();
                        const statusBadge = status === "paid"
                            ? "success"
                            : (status === "unpaid" ? "warning" : "secondary");

                        html += `
                            <tr>
                                <td>${index + 1}</td>
                                <td>${inv.invoice_no || '—'}</td>
                                <td>৳${parseFloat(inv.amount || 0).toFixed(2)}</td>
                                <td><span class="badge bg-${statusBadge} text-uppercase">${(inv.status || '—')}</span></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-primary download-invoice-btn" data-id="${inv.id}">
                                        <i class="uil uil-download-alt"></i> PDF
                                    </button>
                                </td>
                            </tr>`;
                    });

                    $("#invoiceTableBody").html(html);
                },
                error: function(xhr) {
                    console.error("Failed to load invoices:", xhr.responseText || xhr.responseJSON);
                    $("#invoiceTableWrapper").addClass("d-none");
                    $("#noInvoices").removeClass("d-none");
                }
            });

            // Delegate click to handle download via AJAX (so we can send Authorization header)
            $(document).on('click', '.download-invoice-btn', function () {
                const id = $(this).data('id');
                if (!id) return showAlert("Invalid invoice id", "danger");

                const btn = $(this);
                const originalHtml = btn.html();
                btn.prop('disabled', true).html('Downloading...');

                fetch(`${window.API_BASE_URL}/invoices/${id}/download`, {
                    method: 'GET',
                    headers: {
                        "Authorization": "Bearer " + token,
                        "Accept": "application/pdf"
                    }
                })
                .then(async res => {
                    if (!res.ok) {
                        // try parse json error
                        let errText = await res.text();
                        try {
                            const j = JSON.parse(errText);
                            throw new Error(j.message || errText);
                        } catch (e) {
                            throw new Error(errText || 'Failed to download invoice');
                        }
                    }
                    return res.blob();
                })
                .then(blob => {
                    const url = window.URL.createObjectURL(blob);
                    const a = document.createElement('a');
                    a.href = url;

                    // try to use invoice_no as filename, fallback to invoice-id
                    const filename = `invoice-${id}.pdf`;
                    a.download = filename;
                    document.body.appendChild(a);
                    a.click();
                    a.remove();
                    window.URL.revokeObjectURL(url);
                })
                .catch(err => {
                    console.error(err);
                    showAlert(err.message || "Failed to download invoice", "danger");
                })
                .finally(() => {
                    btn.prop('disabled', false).html(originalHtml);
                });
            });
        });
    </script>
@endsection
