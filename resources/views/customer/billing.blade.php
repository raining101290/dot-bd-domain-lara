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
                            <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-file-info-alt fs-4 mb-0"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Total Invoices</h6>
                                        <p class="fs-5 text-dark fw-bold mb-0">
                                            <span id="totalInvoices">0</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mt-4">
                            <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-usd-circle fs-4 mb-0 text-danger"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Amount Due</h6>
                                        <p class="fs-5 text-danger fw-bold mb-0">
                                            ৳<span id="amountDue">0</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mt-4">
                            <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-check-circle fs-4 mb-0 text-success"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Paid This Year</h6>
                                        <p class="fs-5 text-success fw-bold mb-0">
                                            ৳<span id="paidThisYear">0</span>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mt-4">
                            <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                <div class="d-flex align-items-center">
                                    <div class="icon text-center rounded-pill">
                                        <i class="uil uil-clock-eight fs-4 mb-0 text-danger"></i>
                                    </div>
                                    <div class="flex-1 ms-3">
                                        <h6 class="mb-0 text-muted">Pending</h6>
                                        <p class="fs-5 text-danger fw-bold mb-0">
                                            <span id="pendingInvoices">0</span>
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
                                        <h5 class="mb-1">My Invoices (<span class="totalInvoices">0</span>)</h5>
                                    </div>
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
                                        <table class="table table-bordered table-sm align-middle mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th>Invoice No</th>
                                                    <th>Domain</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Created Date</th>
                                                    <th class="text-center">Action</th>
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
                    // Extract invoice data safely (handle paginated or plain array)
                    const invoices = Array.isArray(response.data)
                        ? response.data
                        : response.data?.data || [];

                    // --------------------------
                    // NEW: update summary cards
                    // --------------------------
                    const currentYear = new Date().getFullYear();
                    let totalInvoices = invoices.length;
                    let amountDue = 0;
                    let paidThisYear = 0;
                    let pendingInvoices = 0;

                    invoices.forEach(inv => {
                        const amount = parseFloat(inv.amount || 0);
                        const status = (inv.status || "").toLowerCase();
                        const year = new Date(inv.created_at).getFullYear();

                        if (status === "unpaid") {
                            amountDue += amount;
                            pendingInvoices++;
                        } else if (status === "paid" && year === currentYear) {
                            paidThisYear += amount;
                        }
                    });

                    $("#totalInvoices").text(totalInvoices);
                    $(".totalInvoices").text(totalInvoices);
                    $("#amountDue").text(amountDue.toLocaleString());
                    $("#paidThisYear").text(paidThisYear.toLocaleString());
                    $("#pendingInvoices").text(pendingInvoices);

                    // --------------------------
                    // Existing table rendering logic
                    // --------------------------
                    if (invoices.length === 0) {
                        $("#invoiceTableWrapper").addClass("d-none");
                        $("#noInvoices").removeClass("d-none");
                        return;
                    }

                    $("#noInvoices").addClass("d-none");
                    $("#invoiceTableWrapper").removeClass("d-none");

                    let html = "";
                    invoices.slice(0, 5).forEach(inv => {
                        const domain = inv.order?.domain_name || "N/A";
                        const date = new Date(inv.created_at).toLocaleDateString();
                        const statusBadge =
                            inv.status === "paid"
                                ? "success"
                                : inv.status === "unpaid"
                                ? "warning"
                                : "secondary";

                        html += `
                            <tr>
                                <td>${inv.invoice_no}</td>
                                <td>${domain}</td>
                                <td>৳${parseFloat(inv.amount).toFixed(2)}</td>
                                <td><span class="badge bg-${statusBadge} text-uppercase">${inv.status}</span></td>
                                <td>${date}</td>
                                <td align="center">
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
