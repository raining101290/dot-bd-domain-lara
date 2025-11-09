@extends('layouts.master')

@section('content')
    <section class="bg-half-160 d-table w-100" id="home">
        <div class="bg-overlay bg-gradient-success opacity-8"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="title-heading text-center">
                        <h1 class="heading title-dark mb-3">Register your .bd & বাংলা domain</h1>
                        <p class="mx-auto text-white my-30 fs-5">Instantly from the first BTCL accredited reseller with fast,
                            easy, and premium support</p>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-primary" href="/order/domain">Register Domain Now</a>
                    </div>
                    {{-- <h4 class="mb-3">Search Your Domain</h4>
                    <form id="domainSearchForm" class="card shadow rounded mt-60">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group domain-search-container">
                                    <input name="name" id="name" type="text" class="form-control form-control-lg rounded-left" placeholder="Domain name" required>
                                    <div class="input-group-append">
                                        <select class="form-control form-control-lg rounded-0" name="extension" id="extension">
                                            @foreach ($domains as $domain)
                                                <option value="{{ $domain->name }}">{{ $domain->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="searchbtn btn-lg btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </form> --}}

                    <!-- RESULT ALERT WILL SHOW HERE -->
                    <div id="resultAlert"></div>
                    {{-- <div class="row  justify-content-center">
                        @foreach ($domains as $domain)
                            <div class="col-lg-2 col-md-4 col-6 mt-2">
                                <a href="javascript:void(0)" class="text-dark">
                                    <div class="rounded shadow p-1 text-center">
                                        <h6 class="mb-0 ">{{$domain->name}}<br>
                                            <span class="text-primary">{{number_format($domain->price, 0)}}</span><span class="text-muted">/year</span></h6>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    <div class="position-relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    {{-- <section class="py-5 mt-100">
        <div class="container bg-light py-5">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Price to Register a Second level Domain Names</h2>
                <p class="text-muted">Transparent pricing with fast and reliable registration support.</p>
            </div>

            <div class="row justify-content-center mb-10">
                <div class="col-md-5 mb-4">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Registration Cost (1 Year)</h5>
                            <p class="display-6 fw-bold text-success mb-1">৳2,000 </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mb-4">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Renewal Cost (1 Year)</h5>
                            <p class="display-6 fw-bold text-primary mb-1">৳2,000</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-center mb-5">
                <h2 class="fw-bold">Price to Register a Third level Domain Name</h2>
                <p class="text-muted">Transparent pricing with fast and reliable registration support.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-5 mb-4">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Registration Cost (1 Year)</h5>
                            <p class="display-6 fw-bold text-success mb-1">৳1,100 </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 mb-4">
                    <div class="card shadow-lg border-0 h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">Renewal Cost (1 Year)</h5>
                            <p class="display-6 fw-bold text-primary mb-1">৳1,100</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- Extra Info -->
            <div class="mt-5 text-center">
                <div class="alert alert-info shadow-sm p-30" role="alert">
                    <strong>Note:</strong> These prices include a nominal service charge. Registration of a .BD domain may take up to 7 working days. 
                    We handle the application process with BTCL, follow up until approval, and hand over all ownership papers upon completion.  
                    <br><br>
                    <strong>Service Charge:</strong> Customers only need to pay a minimal fee of <span class="text-primary fw-bold">৳100</span> for processing and support.
                </div>

                <h4 class="mt-3 text-primary">
                    We also provide <strong>.বাংলা</strong> domains. The price and requirements to register <strong>.বাংলা</strong> and <strong>.BD</strong> domains are the same.
                </h4>
            </div>
        </div>
    </section> --}}

    <section class="section bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Why Choose .BD Domains?</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Build trust with <span class="text-primary fw-bold">Domaindesk </span> with your Bangladeshi audience using a local domain extension </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper small">
                        <div class="back-card green"></div>
                        <div class="top-card">
                            <div class="card-content">
                                <div class="icon-box text-primary">
                                    <i class="uil uil-rocket icon-lg"></i>
                                </div>
                                <h5 class="fw-semibold">Instant Activation</h5>
                                <p class="text-secondary mt-2">
                                    Get your domain live within minutes with automated setup
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper small">
                        <div class="back-card green"></div>
                        <div class="top-card">
                            <div class="card-content">
                                <div class="icon-box text-primary">
                                    <i class="uil uil-shield-check icon-lg"></i>
                                </div>
                                <h5 class="fw-semibold">Secure & Trusted</h5>
                                <p class="text-secondary mt-2">
                                    Government-authorized domain registration with complete security
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper small">
                        <div class="back-card green"></div>
                        <div class="top-card">
                            <div class="card-content">
                                <div class="icon-box text-primary">
                                    <i class="uil uil-postcard icon-lg"></i>
                                </div>
                                <h5 class="fw-semibold">National Identity</h5>
                                <p class="text-secondary mt-2">
                                   Establish your authentic Bangladeshi digital presence with .bd domains
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper small">
                        <div class="back-card green"></div>
                        <div class="top-card">
                            <div class="card-content">
                                <div class="icon-box text-primary">
                                    <i class="uil uil-headphones icon-lg"></i>
                                </div>
                                <h5 class="fw-semibold">24/7 Support</h5>
                                <p class="text-secondary mt-2">
                                    Round-the-clock customer support in Bengali and English
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper small">
                        <div class="back-card green"></div>
                        <div class="top-card">
                            <div class="card-content">
                                <div class="icon-box text-primary">
                                    <i class="uil uil-server-network icon-lg"></i>
                                </div>
                                <h5 class="fw-semibold">DNS Management</h5>
                                <p class="text-secondary mt-2">
                                    Manage your DNS records from our hosted DNS Manager
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper small">
                        <div class="back-card green"></div>
                        <div class="top-card">
                            <div class="card-content">
                                <div class="icon-box text-primary">
                                    <i class="uil uil-envelope icon-lg"></i>
                                </div>
                                <h5 class="fw-semibold">Email Forwarding</h5>
                                <p class="text-secondary mt-2">
                                    Enjoy email forwarding feature for your domain
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper small">
                        <div class="back-card green"></div>
                        <div class="top-card">
                            <div class="card-content">
                                <div class="icon-box text-primary">
                                    <i class="uil uil-globe icon-lg"></i>
                                </div>
                                <h5 class="fw-semibold">Fast DNS Propagation</h5>
                                <p class="text-secondary mt-2">
                                    DNS propagation within minimum timeframe from own dns server
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card-wrapper small">
                        <div class="back-card green"></div>
                        <div class="top-card">
                            <div class="card-content">
                                <div class="icon-box text-primary">
                                    <i class="uil uil-file-check-alt icon-lg"></i>
                                </div>
                                <h5 class="fw-semibold">Minimum paperwork</h5>
                                <p class="text-secondary mt-2">
                                    With automation less paperwork is required to get your domain
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="position-relative mt-100">
        <div class="shape overflow-hidden text-light">
            <svg viewBox="0 0 2880 250" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M720 125L2160 0H2880V250H0V125H720Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title me-lg-5">
                        <h4 class="title mb-4">Renew Your .BD Domain Easily</h4>
                        <p class="text-muted">Keep your website active without interruptions. You can renew your .BD domain
                        anytime with Alpha Net. Our hassle-free process ensures quick renewal, so you never lose your
                        online presence.</p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span> Fast and secure domain renewal
                                process</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span> Renew your .BD domain anytime
                                without hassle</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span> Dedicated support via Chat,
                                Phone & Email</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span> Customer satisfaction is our
                                top priority</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span> 24/7 availability to assist
                                you</li>
                        </ul>
                        <a href="javascript:void(0)" class="mt-3 h6 text-primary">Find Out More <i
                                class="uil uil-angle-right-b"></i></a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 order-1 order-md-2">
                    <img src="assets/images/illustrator/app_development_SVG.svg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Required Documents to Register .BD Domain</h2>
            <div class="accordion" id="buyingquestion">
                <div class="accordion-item rounded">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button border-0 bg-light" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            For Individual / Personal
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse border-0 collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#buyingquestion">
                        <div class="accordion-body">
                            <ul class="list-unstyled text-muted">
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> Applicant National ID Card
                                    (NID)</li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> Domain name must match
                                    with NID card name
                                </li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> <small
                                        class="text-muted">Example: <code>personal-domain.bd,</code>
                                        <code>personal-domain.com.bd</code></small></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item rounded mt-2">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo">
                            For Company
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#buyingquestion">
                        <div class="accordion-body">
                            <ul class="list-unstyled text-muted">
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> Scan Copy of Trade
                                    License</li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> National ID Card (NID)
                                </li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> <small
                                        class="text-muted">Example: <code>company-name.com.bd</code></small></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded mt-2">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree">
                            For Government Domain
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse border-0 collapse" aria-labelledby="headingThree"
                        data-bs-parent="#buyingquestion">
                        <div class="accordion-body">
                            <ul class="list-unstyled text-muted">
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> Forwarding Letter (issued
                                    by authority on official letterhead)</li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> National ID Card (NID)
                                </li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> <small
                                        class="text-muted">Example: <code>bitpa.gov.bd</code></small></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded mt-2">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            For NGO / Welfare / Non-profit Organization
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                        data-bs-parent="#buyingquestion">
                        <div class="accordion-body">
                            <ul class="list-unstyled text-muted">
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> Registration Certificate
                                    (issued by Social Welfare Ministry)</li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> National ID Card (NID)
                                </li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> <small
                                        class="text-muted">Example: <code>ngobd.org.bd</code> (Registrant name must match
                                        organization)</small></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded mt-2">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button border-0 bg-light collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour">
                            For Educational Domain
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse border-0 collapse" aria-labelledby="headingFour"
                        data-bs-parent="#buyingquestion">
                        <div class="accordion-body">
                            <ul class="list-unstyled text-muted">
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> Forwarding Letter (issued
                                    by institution authority on letterhead)</li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> Institution Approval
                                    Letter (Govt./Education Board/Madrasa Board/BTEB/UGC, etc.)</li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> Mobile Number and Email
                                    Address (must match Govt. EIIN Database)</li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> National ID Card (NID)
                                </li>
                                <li><span class="text-primary h5 me-2"><i
                                            class="uil uil-check-circle align-middle"></i></span> <small
                                        class="text-muted">Example: <code>yourinstitutename.edu.bd</code></small></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <img src="assets/images/hosting/1.png" class="img-fluid" alt="">
                </div>

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">Why Choose a .BD Domain for Your Website?</h4>
                        <p class="text-muted">A .BD domain is the official domain extension for Bangladesh, helping
                            businesses and individuals establish a trusted local online presence. Registering a .BD domain
                            ensures credibility, boosts SEO for local searches, and connects you directly with your
                            Bangladeshi audience.</p>
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Build trust with local
                                customers in Bangladesh.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Enhance search engine
                                visibility for Bangladeshi searches.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Secure a unique and
                                professional online identity.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Access affordable domain
                                registration and reliable support.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Compatible with all major
                                hosting providers.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 order-2 order-md-1 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title">
                        <h4 class="title mb-4">How to Register Your .BD Domain with <b>Domain Desk</b></h4>
                        <p class="text-muted">Registering a .BD domain with <b>Domain Desk</b> is fast, secure, and simple.
                            Follow our easy steps to claim your desired domain and start building your website in minutes.
                        </p>
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span> Search for your desired .BD
                                domain using our domain search tool.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span> Choose the extension that
                                suits your business: .bd, .com.bd, or .বাংলা.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span> Fill in your personal or
                                business details for registration.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span> Complete the payment securely
                                using our supported methods.</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span> Receive instant confirmation
                                and start using your .BD domain.</li>
                        </ul>
                        <a href="#home" class="btn btn-primary mt-3">Get Started <i
                                class="uil uil-angle-right-b"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 order-1 order-md-2">
                    <img src="assets/images/hosting/2.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="position-relative">
        <div class="shape overflow-hidden text-footer">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    <script type="text/javascript">
        document.getElementById('domainSearchForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            const name = document.getElementById('name').value;
            const ext = document.getElementById('extension').value;
            const domain = name + ext;
            const resultBox = document.getElementById('resultAlert');
            // Show loading spinner
            resultBox.innerHTML = `
            <div class="alert glass-box fw-medium mt-3 d-flex align-items-center text-white" role="alert">
                <div class="spinner-border spinner-border-sm text-primary me-2"></div>
                Checking availability of <strong class="ms-1">${domain}</strong>
            </div>`;
            try {
                const response = await fetch(
                    "https://domaindesk.com.bd/api-proxy.php?api=availability&token=xldo34styEfc90yTwkghdtdswwd", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json"
                        },
                        body: JSON.stringify({
                            domain: domain
                        })
                    });

                const data = await response.json();
                console.log(data);
                if (data.status === "success" || data.responseCode === 2000 || data.available === true) {
                    resultBox.innerHTML = `
                    <div class="alert bg-white fw-medium mt-3 d-flex align-items-center justify-content-between text-success" role="alert">
                        <div>
                        <i class="uil uil-check-circle fs-5 align-middle me-1"></i> <strong>${domain} is available.</strong></div>
                        <a href="/order/domain?query=${domain}" class="btn btn-sm btn-success">Register Now</a>
                    </div>`;
                } else {
                    resultBox.innerHTML = `
                    <div class="alert bg-white fw-medium mt-3 text-danger" role="alert">
                        <i class="uil uil-times-circle fs-5 align-middle me-1"></i> <strong>${domain} </strong> not available. <br>
                        <small>${data.message}</small>
                    </div>`;
                }

            } catch (error) {
                resultBox.innerHTML = `
                <div class="alert bg-white fw-medium mt-3 d-flex align-items-center text-danger" role="alert">
                    Something went wrong. Try again!
                </div>`;
            }
        });
    </script>
@endsection
