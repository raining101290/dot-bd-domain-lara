@extends('layouts.master')
@section('content')
    <section class="bg-gradient-primary py-5 ">
        <section class="py-50 d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div id="alertBox" class="position-fixed right-2 z-50">
                    </div>
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <span class="badge rounded-pill bg-soft-success"><i class="uil uil-globe text-success"></i> Secure Your Online Identity</span>
                            <h4 class="title text-success mt-3 mb-4">Search Your Domain</h4>
                            <p class="text-white-50 para-desc mb-0 mx-auto">Get your perfect domain name from <span class="text-success fw-bold">Domaindesk</span> in minutes. Secure, fast, and compliant with BTCL & BTRC regulations. </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">  
                        <form id="domainSearchForm" class="card shadow rounded mt-60">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group domain-search-container">
                                        <div class="position-relative flex-grow-1">
                                            <input name="name" id="name" type="text"
                                                class="domain-search form-control form-control-lg rounded-left pe-5"
                                                placeholder="Domain name" required>
                                            <!-- Clear Button -->
                                            <button type="button" id="clearSearch"
                                                class="cross-button btn position-absolute top-50 end-0 translate-middle-y me-2 rounded-circle border border-secondary bg-white"
                                                style="display:none; width:40px; height:40px; padding:0; align-items:center; justify-content:center;">
                                                <i class="uil uil-times text-secondary" style="font-size:20px;"></i>
                                            </button>
                                        </div>

                                        <div class="input-group-append">
                                            <select class="form-control form-control-lg rounded-0" name="extension" id="extension">
                                                {{-- @foreach ($domains as $domain)
                                                    <option value="{{ $domain->name }}">{{ $domain->name }}</option>
                                                @endforeach --}}
                                            </select>
                                        </div>

                                        <button type="submit" class="searchbtn btn-lg btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="resultAlert"></div>
                    </div>
                </div>
                <div class="row pt-3 mt-100 mb-100">
                    <div class="col-12 col-md-8 register-domain-section" style="display: none">
                        <div class="pages-heading">
                            <h1 class="text-white card-heading"> Register your Domain </h1>
                            <div class="card shadow rounded mb-4 border-0">
                                <div class="card-header bg-success text-white">
                                    <h4 class="mb-0">Order Domain: <span class="selectedDomain"></span></h4>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h5 class="card-title mb-0">Selected Domain</h5>
                                        <button class="btn btn-secondary btn-sm search-again">Search another</a>
                                    </div>

                                    <div class="alert bg-soft-success fw-medium d-flex align-items-center justify-content-between"
                                        role="alert">
                                        <div class="fw-bold d-flex align-items-center fs-5">
                                            <i class="uil uil-check-circle fs-5 align-middle me-1"></i>
                                            <span class="selectedDomain"></span>
                                        </div>
                                        <span class="badge bg-soft-success fw-bold"> Available </span>
                                    </div>
                                </div>
                            </div>
                            <h4 class="text-white card-heading"> Registration Details </h4>
                            <div class="card shadow rounded mb-4 border-0">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <div class="col-md-6">
                                            <label for="customer_type" class="form-label text-muted">Registration Purpose </label>
                                            <select id="customer_type" name="customer_type" class="form-select form-control"
                                                required>
                                                <option selected value="Individual">Individual</option>
                                                <option value="Company">Company</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="tld_price" class="form-label text-muted">Registration Period </label>
                                            <select id="tld_price" name="tld_price" class="form-select form-control"
                                                required>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h4 class="text-white card-heading"> Contact Information </h4>
                            <div class="card shadow rounded mb-4">
                                <div class="card-body">
                                    <div id="authSection">
                                        <ul class="nav nav-pills mb-4 nav-justified flex-column flex-sm-row rounded tab-section">
                                            <li class="nav-item">
                                                <a data-id="login" href="javascript:void(0)" class="nav-link active">
                                                    <div class="text-center py-1">
                                                        <h6 class="mb-0">Login</h6>
                                                    </div>
                                                </a>
                                            </li>
                                            
                                            <li class="nav-item">
                                                <a data-id="register" href="javascript:void(0)" class="nav-link">
                                                    <div class="text-center py-1">
                                                        <h6 class="mb-0">Register</h6>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="registrantSection" style="display: none;">
                                        <div class="row mb-20 bg-white rounded">
                                            <div class="col-md-12 border border-dark-subtle rounded">
                                                <div class="mb-3 p-2">
                                                    <label for="registrant" class="form-label text-muted">Registrant Contact </label>
                                                    <div class="position-relative">
                                                        <select id="registrant" name="registrant"
                                                            class="form-select form-control">
                                                            <option selected value="0">Use My Profile Info</option>
                                                            <option value="1">Create New</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="loginAlert"></div> 
                                    <div id="registrantLoginSection">
                                        <form id="registrantForm" style="display: none">
                                            <div class="row mb-20">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="fullname" class="form-label text-muted">
                                                            Full name 
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="form-icon position-relative">
                                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                                            <input id="fullname" type="text" class="form-control ps-5" placeholder="Full name" name="fullname" required autocomplete="on" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="company" class="form-label text-muted">Company </label>
                                                        <div class="form-icon position-relative">
                                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                                            <input id="company" type="text" class="form-control ps-5"
                                                                placeholder="Company" name="company" autocomplete="on" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="email" class="form-label text-muted">Email <span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-icon position-relative">
                                                            <i data-feather="user-check" class="fea icon-sm icons"></i>
                                                            <input id="email" type="email" class="form-control ps-5"
                                                                placeholder="Email" name="email" required
                                                                autocomplete="on" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="mobile" class="form-label text-muted">Mobile <span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-icon position-relative">
                                                            <i data-feather="phone" class="fea icon-sm icons"></i>
                                                            <input id="mobile" type="text" class="form-control ps-5"
                                                                placeholder="Mobile" name="mobile" required
                                                                autocomplete="on" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="NID" class="form-label text-muted">National ID <span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-icon position-relative">
                                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                                            <input id="NID" type="text" class="form-control ps-5"
                                                                placeholder="NID" name="NID" autocomplete="on" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="city" class="form-label text-muted">City <span
                                                                class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <input id="city" type="text" class="form-control"
                                                                placeholder="City" name="city" required
                                                                autocomplete="on" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="post" class="form-label text-muted">Postal code <span
                                                                class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <input id="post" type="text" class="form-control"
                                                                placeholder="Post" name="post" autocomplete="on" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="state" class="form-label text-muted">State </label>
                                                        <div class="position-relative">
                                                            <select id="state" name="country"
                                                                class="form-select form-control" required>
                                                                <option selected value="Dhaka">Dhaka</option>
                                                                <option value="Chittagong">Chittagong</option>
                                                                <option value="Rajshahi">Rajshahi</option>
                                                                <option value="Khulna">Khulna</option>
                                                                <option value="Barisal">Barisal</option>
                                                                <option value="Sylhet">Sylhet</option>
                                                                <option value="Rangpur">Rangpur</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="address" class="form-label text-muted">Address 
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="position-relative">
                                                            <input id="address" type="text" class="form-control" placeholder="Address" name="address" required autocomplete="on" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 password-field">
                                                    <div class="mb-3">
                                                        <label for="rpassword"  class="form-label text-muted">Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <input id="rpassword" type="password" class="form-control" placeholder="Password" name="rpassword" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 password-field">
                                                    <div class="mb-3">
                                                        <label for="rcpassword" class="form-label text-muted">Confirm Password <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <input id="rcpassword" type="password" class="form-control" placeholder="Confirm Password" name="rcpassword" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <form id="loginForm">
                                            <div class="row mb-20">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label text-muted">Username <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <input id="username" type="text" class="form-control" placeholder="Username" name="username" required autocomplete="on"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="password"  class="form-label text-muted">Password <span class="text-danger">*</span></label>
                                                    <div class="position-relative">
                                                        <input id="password" required type="password" class="form-control" placeholder="Password" name="password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-block btn-primary loginButton"> Login </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <h4 class="text-white card-heading"> Required Documents </h4>
                            <div class="card shadow rounded mb-4 border-0">
                                <div class="card-body">
                                    <div class="row mb-20">
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="nid_file" class="form-label text-muted"> National ID <span
                                                        class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <input id="nid_file" type="file" class="form-control"
                                                        name="nid_file" required autocomplete="on" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="trade_license" class="form-label text-muted"> Trade
                                                    License
                                                    <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <input id="trade_license" type="file" class="form-control"
                                                        name="trade_license" required autocomplete="on" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="auth_letter" class="form-label text-muted"> Authorization
                                                    Letter <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <input id="auth_letter" type="file" class="form-control"
                                                        name="auth_letter" required autocomplete="on" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-3">
                                                <label for="other_doc" class="form-label text-muted"> Other Document
                                                </label>
                                                <div class="position-relative">
                                                    <input id="other_doc" type="file" class="form-control"
                                                        name="other_doc" required autocomplete="on" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow rounded mb-4 border-0">
                                <div class="card-body">
                                    <h4>Payment method</h4>
                                    <div class="alert bg-soft-success fw-medium cursor-pointer">
                                        <div class="d-flex justify-content-between align-items-center fs-5">
                                            SSL Commerz
                                            <i class="uil uil-check-circle fs-5 align-middle me-1"></i>
                                        </div>
                                    </div>

                                    <div class="form-check-inline">
                                        <div class="mb-0">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                                <label class="form-check-label" for="flexCheckDefault1">I agree to the <a
                                                href="">Terms of Service</a>, <a href="">Refund
                                                Policy</a> and <a href="">Privacy Policy</a>.</label>
                                            </div>
                                        </div>
                                    </div>

                                    <button disabled type="button" id="btn-order" class="btn btn-block btn-success mt-3"> Order and Proceed to
                                        Payment </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 register-domain-section" style="display: none">
                        <div class="pages-heading" style="position: sticky; top: 100px; z-index: 10;">
                            <h4 class="text-white card-heading"> Cart </h4>
                            <div style="position: sticky; top: 100px; z-index: 10;">
                                <div class="card shadow rounded border-0">
                                    <div class="card-body">
                                        <!-- Domain Info -->
                                        <div class="border-bottom pb-3 mb-3">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <p class="fw-semibold mb-1 selectedDomain"></p>
                                                    <small class="text-muted text-capitalize d-block label_customer_type">Individual</small>
                                                    <small class="text-muted years_label">1 Year</small>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Price Breakdown -->
                                        <div class="small mb-3">
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="text-muted">Subtotal:</span>
                                                <span class="fw-medium" id="subtotal">৳0</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-1">
                                                <span class="text-muted">VAT (15%):</span>
                                                <span class="fw-medium" id="vat">৳0</span>
                                            </div>
                                            <div class="d-flex justify-content-between mb-2 text-warning">
                                                <span class="text-muted">Gateway Charge:</span>
                                                <span class="fw-medium" id="gateway">৳0</span>
                                            </div>

                                            <div class="d-flex justify-content-between border-top pt-2 mt-2 fs-5 fw-bold">
                                                <span>Total:</span>
                                                <span id="total">৳0</span>
                                            </div>
                                        </div>

                                        <!-- Payment Method -->
                                        <div class="border-top pt-3">
                                            <label class="form-label fw-semibold">Payment Method</label>
                                            <div class="bg-light p-2 rounded border">
                                                <div class="d-flex align-items-center gap-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="text-success">
                                                        <rect width="20" height="14" x="2" y="5" rx="2">
                                                        </rect>
                                                        <line x1="2" x2="22" y1="10"
                                                            y2="10"></line>
                                                    </svg>
                                                    <span class="fw-medium">SSL Commerz</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center mb-5">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4 text-light">Simple, Transparent Pricing</h4>
                            <p class="text-muted para-desc mb-0 mx-auto">Choose the perfect domain extension from <span class="text-success fw-bold">Domaindesk </span> for your business needs </p>
                        </div>
                    </div>
                    <div class="row justify-content-center" id="domainCardsContainer"></div>
                </div>
            </div>
        </section>
    </section>

    
    <script type="text/javascript">
        $(document).ready(function () {
            const apiURL =  window.API_BASE_URL + "/domains";
            let domainTlds = [];
            $.get(apiURL, function (res) {
                if (!res.success) return console.error("API Error");
                domainTlds = res.data; // store for later use
                const activeTlds = res.data.filter(t => t.status === "active");
                let options = ``;
                let cards = ``;

                activeTlds.forEach(tld => {
                    options += `<option value="${tld.name}">${tld.name}</option>`;
                });

                domainTlds.forEach(tld => {
                    const oneYear = tld.prices.find(p => p.years === 1);
                    const renewalPrice = oneYear ? `Renewal ${oneYear.renewal_price}/year` : "Renewal price not found";

                    const statusBadge = tld.status === "active"
                        ? ``
                        : `<span class="badge bg-secondary">Commingsoon</span>`;

                    cards += `
                    <div class="col-12 col-md-6 col-lg-3 mb-8">
                        <div class="card-wrapper">
                            <div class="back-card"></div>
                            <div class="top-card">
                                <div class="card-content">
                                    <div class="text-end mb-2">${statusBadge}</div>
                                    <h2 class="fw-semibold text-primary text-center">${tld.name.toUpperCase()}</h2>
                                    <h3 class="fw-semibold text-secondary text-center fs-5">${tld.prices[0].register_price}/1st year</h3>
                                    <ul class="list-unstyled text-muted">
                                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle"></i></span>Perfect for businesses</li>
                                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle"></i></span>Instant activation</li>
                                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle"></i></span>Free DNS management</li>
                                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle"></i></span>Email forwarding</li>
                                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle"></i></span>24/7 support</li>
                                        <li class="mb-1"><span class="text-primary h5 me-2"><i class="uil uil-check-circle"></i></span>${renewalPrice}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>`;
                });

                $("#extension").html(options); // only active TLDs
                $("#domainCardsContainer").html(cards); // all TLDs
            });
            function getPricing() {
                const name = $("#name").val().trim();
                const ext = $("#extension").val();
                if (!name || !ext) return;

                const tldData = domainTlds.find(t => t.name === ext);
                if (!tldData) return console.warn("TLD not found");

                let options = ``;
                tldData.prices.forEach(p => {
                    const selected = p.years === 1 ? "selected" : "";
                    options += `<option value="${p.id}" ${selected}>
                        ${p.years} year${p.years > 1 ? 's' : ''} - ৳${p.register_price}
                    </option>`;
                });

                $("#tld_price").html(options);
                $("#tld_price").trigger("change");
            }
            
            // Show clear button when typing or after search
            $('#name').on('input', function () {
                $('#clearSearch').toggle($(this).val().length > 0);
            });

            // Also show it when search is submitted
            $('#domainSearchForm').on('submit', function () {
                if ($('#name').val().length > 0) {
                    $('#clearSearch').show();
                }
            });
            $("#customer_type").on("change", function () {
                var customer = $('#customer_type').val();
                $('.label_customer_type').text(customer);
            });
            $("#tld_price").on("change", function () {
                const text = $("#tld_price option:selected").text().trim(); 
                // format is like "1 year - ৳1100.00"

                const year = text.split(" ")[0]; // "1"
                const price = text.split("৳")[1]; // "1100.00"

                const subtotal = parseFloat(price);
                const vat = subtotal * 0.15;
                const gateway = subtotal * 0.02875; // 2.875% 
                const total = subtotal + vat + gateway;

                $(".years_label").text(year + " " + (year > 1 ? "Years" : "Year"));
                $("#subtotal").text("৳" + subtotal.toFixed(2));
                $("#vat").text("৳" + vat.toFixed(2));
                $("#gateway").text("৳" + gateway.toFixed(2));
                $("#total").text("৳" + total.toFixed(2));
            });
            // Clear input when clicking ✖
            $('#clearSearch').on('click', function () {
                $('#name').val('').focus();
                $(this).hide();
                $('#resultAlert').text('');
                $('.register-domain-section').hide();
            });
            $('.search-again').on('click', function () {
                $('#clearSearch').hide();
                $('.register-domain-section').hide();
                //clear the cart
                $("#resultAlert").text('');
                $("#name").val('');
                $('html, body').animate({ scrollTop: 0 }, 600);
            });
            // Prevent space while typing
            $("#name").on("keydown", function (e) {
                if (e.key === " ") {
                    e.preventDefault();
                }
            });

            // Remove spaces if pasted or auto-filled
            $("#name").on("input", function () {
                this.value = this.value.replace(/\s/g, "");
            });
            $('#flexCheckDefault1').on('change', function () {
                $('.btn-success').prop('disabled', !this.checked);
            });   
            $("#domainSearchForm").on("submit", function (e) {
                e.preventDefault();

                const name = $("#name").val().trim();
                const ext = $("#extension").val();
                const domain = name + ext;
                const resultBox = $("#resultAlert");
                $('.selectedDomain').text(domain);
                // Show loading spinner
                resultBox.html(`
                    <div class="alert glass-box fw-medium mt-3 d-flex align-items-center text-white" role="alert">
                        <div class="spinner-border spinner-border-sm text-primary me-2"></div>
                        Checking availability of <strong class="ms-1">${domain}</strong>
                    </div>
                `);

                $.ajax({
                    url: "https://domaindesk.com.bd/api-proxy.php?api=availability&token=xldo34styEfc90yTwkghdtdswwd",
                    method: "POST",
                    contentType: "application/json",
                    data: JSON.stringify({ domain: domain }),
                    success: function (data) {
                        if (data.status === "success" || data.responseCode === 2000 || data.available === true) {

                            resultBox.html(`
                                <div class="alert bg-white fw-medium mt-3 d-flex align-items-center justify-content-between text-success" role="alert">
                                    <div>
                                        <i class="uil uil-check-circle fs-5 align-middle me-1"></i> 
                                        <strong>${domain} is available.</strong>
                                    </div>
                                    <button class="btn btn-sm btn-success register-now">Register Now</button>
                                </div>
                            `);
                        } else {
                            resultBox.html(`
                                <div class="alert bg-white fw-medium mt-3 text-danger" role="alert">
                                    <i class="uil uil-times-circle fs-5 align-middle me-1"></i> 
                                    <strong>${domain}</strong> not available. <br>
                                    <small>${data.message || ''}</small>
                                </div>
                            `);
                        }
                    },
                    error: function () {
                        resultBox.html(`
                            <div class="alert bg-white fw-medium mt-3 d-flex align-items-center text-danger" role="alert">
                                Something went wrong. Try again!
                            </div>
                        `);
                    }
                });
            });
        
            $(document).on('click', '.register-now', function () {
                getPricing();
                $('.register-domain-section').show();
                var customer = $('#customer_type').val();
                $('.label_customer_type').text(customer);
            });
        
            function fillUserData() {
                if (!window.userProfile) return;
                $("#fullname").val(userProfile.full_name || "");
                $("#email").val(userProfile.email || "");
                $("#mobile").val(userProfile.info.mobile || "");
                $("#company").val(userProfile.info.company || "");
                $("#NID").val(userProfile.info.nid || "");
                $("#city").val(userProfile.info.city || "");
                $("#post").val(userProfile.info.postal_code || "");
                $("#state").val(userProfile.info.state || "").change();
                $("#address").val(userProfile.info.address || "");
            }
            
            function checkToken(){
                const token = localStorage.getItem("token");
                const savedUser = localStorage.getItem("user");
                if (token) {
                    $(".auth-links").html(`
                        <li class="list-inline-item mb-0">
                            <a href="/customer/dashboard">
                                <div class="btn btn-success btn-sm"> Dashboard</div>
                            </a>
                        </li>
                    `);
                }
                if (token) {
                    $("#authSection").hide();
                    $("#registrantSection").show();
                    // $('#registrantLoginSection').hide();
                    $('#registrantLoginSection, #registrantForm').show();
                    $('#loginForm').hide();
                    if (token && savedUser) {
                        $('.password-field').hide();
                        window.userProfile = JSON.parse(savedUser);
                        if (typeof fillUserData === "function") {
                            fillUserData();
                        }
                    }
                } else {
                    $("#authSection").show();
                    $('#registrantLoginSection').show();
                    $("#registrantSection").hide();
                    $('.password-field').show();
                }
            }
            checkToken();
            fillUserData();
            $('.tab-section .nav-link').on('click', function (e) {
                e.preventDefault();
                $(this).data('id') === 'login' ? $('#loginForm').show() && $('#registrantForm').hide() : $('#loginForm').hide() && $('#registrantForm').show();
                $('.tab-section .nav-link').removeClass('active');
                $(this).addClass('active');
            });

            // Change dropdown action
            $("#registrant").on("change", function () {
                if ($(this).val() == "0") {
                    fillUserData();
                } else {
                    $("#registrantForm input").val("");
                }
            });

            $('#loginForm').submit(function (e) {
                e.preventDefault();

                let username = $('#username').val();
                let password = $('#password').val();

                $.ajax({
                    url: window.API_BASE_URL + "/customer/auth/login",
                    type: "POST",
                    dataType: "json",
                    contentType: "application/json",
                    data: JSON.stringify({
                        email: username,
                        password: password
                    }),
                    success: function (response) {
                        if (response?.success) {
                            window.userProfile = response.user;
                            // ✅ Store token
                            localStorage.setItem("token", response.token);
                            localStorage.setItem("user", JSON.stringify(response.user));

                            if (typeof fillUserData === "function") {
                                fillUserData();
                            }
                            // ✅ Success banner
                            $('#loginAlert').html(`
                                <div class="alert alert-success" id="loginSuccessAlert">Login successful! </div>
                            `);
                            if (typeof checkToken === "function") {
                                checkToken();
                            }
                            setTimeout(() => {
                                $('#loginSuccessAlert').fadeOut(300, function() {
                                    $(this).remove();
                                });
                            }, 5000);
                        }
                    },
                    error: function (xhr) {
                        let msg = "Something went wrong";

                        if (xhr.responseJSON && xhr.responseJSON.message) {
                            msg = xhr.responseJSON.message;
                        }

                        $('#loginAlert').html(`
                            <div class="alert alert-danger">${msg}</div>
                        `);
                    }
                });
            });
            $("#registrant").on("change", function () {
                const val = $(this).val();
                if (val == "0") {
                    // Use My Profile Info
                    $('.password-field').hide();
                } 
                else if (val == "1") {
                    // Create New
                    $('.password-field').show();
                }
            });
            $("#btn-order").click(function () {
                let tempCustomer = localStorage.getItem("temp_customer_id");
                let token = localStorage.getItem("token");
                let storedUser = JSON.parse(localStorage.getItem("user"));
                let isLoggedIn = token && storedUser;

                const text = $("#tld_price option:selected").text().trim();
                const year = text.split(" ")[0];

                let domainPayload = new FormData();
                domainPayload.append("domain_name", $(".selectedDomain").first().text().trim());
                domainPayload.append("years", year);
                domainPayload.append("customer_type", $("#customer_type").val().toLowerCase());

                if ($("#nid_file")[0].files.length > 0) domainPayload.append("nid_file", $("#nid_file")[0].files[0]);
                if ($("#trade_license")[0].files.length > 0) domainPayload.append("trade_license", $("#trade_license")[0].files[0]);
                if ($("#auth_letter")[0].files.length > 0) domainPayload.append("auth_letter", $("#auth_letter")[0].files[0]);
                if ($("#other_doc")[0].files.length > 0) domainPayload.append("other_doc", $("#other_doc")[0].files[0]);

                // Logged in user → direct order
                if (isLoggedIn) {
                    if($('#registrant').val() == '1'){
                        registerUser(domainPayload);
                        return;
                    }else{
                        domainPayload.append("customer_id", storedUser.id);
                        placeDomainOrder(domainPayload, token);
                        return;
                    }
                }

                // Not logged in, but already registered earlier → reuse ID
                if (tempCustomer) {
                    domainPayload.append("customer_id", tempCustomer);
                    placeDomainOrder(domainPayload);
                    return;
                }

                // Need registration → register then order
                if ($("#registrantForm").is(":visible")) {
                    registerUser(domainPayload);
                } else {
                    showAlert("danger", "Please login or register first!");
                }
            });

            function registerUser(domainPayload) {
                let registerData = {
                    full_name: $("#fullname").val(),
                    email: $("#email").val(),
                    password: $("#rpassword").val(),
                    password_confirmation: $("#rcpassword").val(),
                    mobile: $("#mobile").val(),
                    company: $("#company").val(),
                    nid: $("#NID").val(),
                    address: $("#address").val(),
                    city: $("#city").val(),
                    state: $("#state").val(),
                    postal_code: $("#post").val(),
                    country: "Bangladesh"
                };
                $.ajax({
                    url:  window.API_BASE_URL + "/customer/auth/register",
                    type: "POST",
                    contentType: "application/json",
                    data: JSON.stringify(registerData),
                    success: function (res) {
                        const customerId = res?.data?.id;
                        localStorage.setItem("temp_customer_id", customerId);
                        showAlert("Registration successful!", "success");
                        domainPayload.append("customer_id", res.data.id);
                        placeDomainOrder(domainPayload);

                    },
                    error: function (xhr) {
                        let message = "Failed to create customer";
                        if (xhr?.responseJSON) {
                            if (xhr.responseJSON.message) {
                                message = xhr.responseJSON.message;
                            }
                            if (xhr.responseJSON.errors) {
                                // Get the first validation error message
                                const firstKey = Object.keys(xhr.responseJSON.errors)[0];
                                message = xhr.responseJSON.errors[firstKey][0];
                            }
                        }
                        showAlert(message, "danger");
                    }
                });
            }
            function placeDomainOrder(domainPayload, token = null) {
                $.ajax({
                    url:  window.API_BASE_URL + "/domain-orders",
                    type: "POST",
                    data: domainPayload,
                    processData: false,
                    contentType: false,
                    headers: token ? { "Authorization": "Bearer " + token } : {},

                    success: function () {
                        showAlert("Domain order placed successfully! Redirecting you to dashboard.", "success");
                        localStorage.removeItem("temp_customer_id");
                        resetAllForms();
                        setTimeout(() => {
                            window.location.href = "/customer/dashboard";
                        }, 3000);
                    },
                    error: function (xhr) {
                        let message = "Failed to place Domain order";
                        if (xhr?.responseJSON) {
                            if (xhr.responseJSON.message) {
                                message = xhr.responseJSON.message;
                            }
                            if (xhr.responseJSON.errors) {
                                // Get the first validation error message
                                const firstKey = Object.keys(xhr.responseJSON.errors)[0];
                                message = xhr.responseJSON.errors[firstKey][0];
                            }
                        }
                        showAlert(message,"danger");
                        resetAllForms();
                    }
                });
            }

            function resetAllForms() {
                document.getElementById("domainSearchForm")?.reset();
                document.getElementById("registrantForm")?.reset();
                document.getElementById("loginForm")?.reset();
            }
            function showAlert(message, type = "success") {
                $("#alertBox").html(`
                    <div class="alert notifications alert-${type} alert-dismissible fade show" role="alert">
                        ${message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `);

                // Auto remove after 5 seconds
                setTimeout(() => {
                    if ($('.notifications').length) {
                        $('.notifications').alert('close');
                    }
                }, 5000);
            }
        });
    </script>
@endsection
