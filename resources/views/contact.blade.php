@extends('layouts.master')

@section('content')
    
    <section class="bg-half-170 bg-gradient-primary d-table w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading">
                        <h4 class="title mb-0 text-white-50">Contact Us</h4>
                    </div>
                </div>  
            </div>
            
            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                    <ul class="breadcrumb rounded shadow mb-0 px-4 py-2">
                        <li class="breadcrumb-item"><a href="/">DomainDesk</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ul>
                </nav>
            </div>
        </div> 
    </section>
    

    
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    

    
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-phone rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Phone</h5>
                            <p class="read-more">+88 09614 101010</p>
                            <p class="read-more">+88 01883 855555</p>
                            <p class="read-more">+88 01619 474927</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-envelope rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Email</h5>
                            <a href="mailto:contact@example.com" class="read-more">support@domaindesk.com.bd</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-map-marker rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Location</h5>
                            <p class="text-muted">House# 27/1/B, Road# 3, Shyamoli, Dhaka-1207 , Bangladesh.</p>
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d365.90233775331063!2d90.3648622330869!3d23.775932797965424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0babd24d463%3A0x63798c6da9366bc4!2sHouse-27%2C%201%2FB%20Kallyanpur%20Rd%20No%203%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1762769160780!5m2!1sen!2sbd"
                                data-type="iframe" class="video-play-icon read-more lightbox">View on Google map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                    <div class="card shadow rounded border-0">
                        <div class="card-body py-5">
                            <h4 class="card-title">Get In Touch !</h4>
                            <div class="custom-form mt-3">
                                <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                    <p id="error-msg" class="mb-0"></p>
                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Name <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="name" id="name" type="text" class="form-control ps-5" placeholder="Name :">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Your Email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email" class="form-control ps-5" placeholder="Email :">
                                                </div>
                                            </div> 
                                        </div>
    
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Subject</label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="subject" id="subject" class="form-control ps-5" placeholder="subject :">
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Comments <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control ps-5" placeholder="Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 col-md-6 order-1 order-md-2">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <img src="assets/images/contact.svg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-100 mt-60">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="card map border-0">
                        <div class="card-body p-0">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d365.90233775331063!2d90.3648622330869!3d23.775932797965424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0babd24d463%3A0x63798c6da9366bc4!2sHouse-27%2C%201%2FB%20Kallyanpur%20Rd%20No%203%2C%20Dhaka%201216!5e0!3m2!1sen!2sbd!4v1762769160780!5m2!1sen!2sbd" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
