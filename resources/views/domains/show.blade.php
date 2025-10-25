@extends('layouts.master')
@section('content')
    {{-- <div class="container py-5 mt-100">
        
        <h1 class="text-success">Domain Extension: {{ $domain->name }}</h1>
        <p class="text-muted">Information about the {{ $domain->name }} domain.</p>

        <div class="card mt-4">
            <div class="card-body">
                <p>You can register your {{ $domain->name }} domain through our system.</p>
                <a href="{{ url('domain-registration?ext=' . $domain->name) }}" class="btn btn-primary">
                    Register {{ $domain->name }}
                </a>
            </div>
        </div>
    </div> --}}

    <section class="bg-half-170 d-table bg-gradient-success4 w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col">
                    <div class="pages-heading title-heading text-center">
                        <h4 class="display-6 text-white title-dark mb-4 fw-bold"> {{ $domain->name }} Domain Reseller Bangladesh</h4>
                        <p class="text-white">Information about the {{ $domain->name }} domain.</p>
                        <a href="{{ url('domain-registration?ext=' . $domain->name) }}" class="btn btn-primary">
                            Register {{ $domain->name }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section class="section pt-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row justify-content-center">
                        @foreach ($domains as $domain)
                            <div class="col-lg-2 col-md-4 col-6 mb-4">
                                <a href="{{ route('tld.show', ltrim($domain->name, '.')) }}" class="text-dark">
                                    <div class="rounded shadow-md p-1 text-center">
                                        <h6 class="mb-0">{{ $domain->name }} <br><span class="text-primary">$4.99</span>/year</h6>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        {{-- <div class="col-lg-2 col-md-4 col-6">
                            <a href="javascript:void(0)" class="text-dark">
                                <div class="rounded shadow p-1 text-center">
                                    <h6 class="mb-0">.in <br><span class="text-primary">$4.99</span>/year</h6>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-2 col-md-4 col-6">
                            <a href="javascript:void(0)" class="text-dark">
                                <div class="rounded shadow p-1 text-center">
                                    <h6 class="mb-0">.com <br><span class="text-primary">$5.99</span>/year</h6>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-2 col-md-4 col-6 mt-4 mt-sm-0">
                            <a href="javascript:void(0)" class="text-dark">
                                <div class="rounded shadow p-1 text-center">
                                    <h6 class="mb-0">.org <br><span class="text-primary">$6.99</span>/year</h6>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-2 col-md-4 col-6 mt-4 mt-lg-0">
                            <a href="javascript:void(0)" class="text-dark">
                                <div class="rounded shadow p-1 text-center">
                                    <h6 class="mb-0">.net <br><span class="text-primary">$7.99</span>/year</h6>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-2 col-md-4 col-6 mt-4 mt-lg-0">
                            <a href="javascript:void(0)" class="text-dark">
                                <div class="rounded shadow p-1 text-center">
                                    <h6 class="mb-0">.info <br><span class="text-primary">$3.99</span>/year</h6>
                                </div>
                            </a>
                        </div>
                        
                        <div class="col-lg-2 col-md-4 col-6 mt-4 mt-lg-0">
                            <a href="javascript:void(0)" class="text-dark">
                                <div class="rounded shadow p-1 text-center">
                                    <h6 class="mb-0">.me <br><span class="text-primary">$2.99</span>/year</h6>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h4 class="title mb-3">Why choose Domain Desk BD ?</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Domain Desk BD that can provide everything you need to generate your business, drive traffic, connect.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-shield-check"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Safe & Secured</h5>
                            <p class="para text-muted mb-0">If the distribution of letters and 'words' is random, the reader from making a neutral judgement</p>
                        </div>
                        <div class="position-absolute top-0 end-0">
                            <i class="uil uil-shield-check display-1 opacity-05"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-invoice"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Money Back Guarentee</h5>
                            <p class="para text-muted mb-0">If the distribution of letters and 'words' is random, the reader from making a neutral judgement</p>
                        </div>
                        <div class="position-absolute top-0 end-0">
                            <i class="uil uil-invoice display-1 opacity-05"></i>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-12 mt-4 pt-2">
                    <div class="card features feature-primary feature-full-bg rounded p-4 bg-light position-relative overflow-hidden border-0">
                        <span class="h1 icon-color">
                            <i class="uil uil-user-check"></i>
                        </span>
                        <div class="card-body p-0 content">
                            <h5>Dedicated Supports</h5>
                            <p class="para text-muted mb-0">If the distribution of letters and 'words' is random, the reader from making a neutral judgement</p>
                        </div>
                        <div class="position-absolute top-0 end-0">
                            <i class="uil uil-user-check display-1 opacity-05"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section bg-primary">
        <div class="container">
            <div class="row mb-md-4 pb-md-2 justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center pb-md-5">
                        <h4 class="title text-white title-dark mb-3">Pricing Rates or Tables</h4>
                        <p class="text-white-50 para-desc mx-auto mb-0">Start working with Landrick that can provide everything you need to generate awareness, drive traffic, connect.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="price">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-md-5 pt-md-3 mt-lg-0 pt-lg-0">
                    <div class="table-responsive bg-white shadow rounded features-absolute">
                        <table class="table mb-0 table-center">
                            <thead>
                                <tr class="bg-light">
                                    <th scope="col" class="border-bottom py-4 px-3" style="min-width: 250px;">Domain Name</th>
                                    <th scope="col" class="border-bottom py-4 px-3 text-center" style="min-width: 80px;">Registration</th>
                                    <th scope="col" class="border-bottom py-4 px-3 text-center" style="min-width: 80px;">2 Year</th>
                                    <th scope="col" class="border-bottom py-4 px-3 text-center" style="min-width: 80px;">Renew</th>
                                    <th scope="col" class="border-bottom py-4 px-3 text-end" style="min-width: 100px;">Click Here</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="p-3">.com</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.in</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.online</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.net</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.co</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.live</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.xyz</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.org</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.club</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.me</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.today</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.life</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.shop</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.store</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>

                                <tr>
                                    <th class="p-3">.solution</th>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-center">$ 3.99</td>
                                    <td class="p-3 text-end"><a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Buy Now</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection