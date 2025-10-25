@extends('layouts.master')

@section('content')
    <section class="bg-half-170 d-table bg-gradient-success4 w-100">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col">
                    <div class="pages-heading title-heading text-center">
                        <h4 class="display-6 text-white title-dark mb-4 fw-bold">Find a Great Domain</h4>
                        
                        <div class="text-center subcribe-form mt-4 pt-2">
                            <form>
                                <input type="text" id="text" name="text" class="rounded-pill bg-white-50" placeholder="Search your domain name...">
                                <button type="submit" class="btn btn-pills btn-primary">Search <i class="uil uil-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="section pt-4">
        <div class="container mb-5">
            <div class="row mt-5">
                <div class="col-12">
                    <div class="section-title text-center pb-md-5">
                        <h4 class="title title-dark mb-3">Celebrate new horizons with <span class="text-success">{{$domain}}</span> ✈️🌟</h4>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-4 shadow-md rounded">
                        <div class="text-left">
                            @if (!$available)
                                <span class="badge text-bg-success">Domain Available</span>
                                <h4 class="title title-dark mt-2 mb-2">{{$domain}}<span class="text-primary">.com</span></h4>
                            @else
                                <span class="badge text-bg-secondary">Domain Taken</span>
                                <h4 class="title title-dark mt-2 mb-2">{{$domain}}<span class="text-primary">.com</span></h4>
                            @endif
                        </div>
                        <div class="text-end">
                            <h4 class="title title-dark mb-2">$12.00</h4>
                            <a href="{{ route('domain.buy', ['domain' => $domain]) }}" class="btn btn-primary btn-sm">Make it yours</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <h4>Available Alternatives:</h4>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center p-4 shadow-md rounded">
                        <div class="text-left">
                            @if ($available)
                                <span class="badge text-bg-success">Domain Available</span>
                                <h4 class="title title-dark mt-2 mb-2">{{$domain}}<span class="text-primary">.online</span></h4>
                            @else
                                <span class="badge text-bg-secondary">Domain Taken</span>
                                <svg class="uxicon-svg-container" height="24" width="24" role="presentation">
                                    <use fill="currentColor" xlink:href="#svg-container-no"></use>
                                </svg>
                            @endif
                        </div>
                        <div class="text-end">
                            <h4 class="title title-dark mb-2">$12.00 <span class="text-decoration-line-through text-danger">$14.00</span></h4>
                            <a href="{{ route('domain.buy', ['domain' => $domain]) }}" class="btn btn-primary btn-sm">Make it yours</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-4 shadow-md rounded">
                        <div class="text-left">
                            @if ($available)
                                <span class="badge text-bg-success">Domain Available</span>
                                <h4 class="title title-dark mt-2 mb-2">{{$domain}}<span class="text-primary">.info</span></h4>
                            @else
                                <span class="badge text-bg-secondary">Domain Taken</span>
                                <svg class="uxicon-svg-container" height="24" width="24" role="presentation">
                                    <use fill="currentColor" xlink:href="#svg-container-no"></use>
                                </svg>
                            @endif
                        </div>
                        <div class="text-end">
                            <h4 class="title title-dark mb-2">$12.00 <span class="text-decoration-line-through text-danger">$14.00</span></h4>
                            <a href="{{ route('domain.buy', ['domain' => $domain]) }}" class="btn btn-primary btn-sm">Make it yours</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-4 shadow-md rounded">
                        <div class="text-left">
                            @if ($available)
                                <span class="badge text-bg-success">Domain Available</span>
                                <h4 class="title title-dark mt-2 mb-2">{{$domain}}<span class="text-primary">.xyz</span></h4>
                            @else
                                <span class="badge text-bg-secondary">Domain Taken</span>
                                <svg class="uxicon-svg-container" height="24" width="24" role="presentation">
                                    <use fill="currentColor" xlink:href="#svg-container-no"></use>
                                </svg>
                            @endif
                        </div>
                        <div class="text-end">
                            <h4 class="title title-dark mb-2">$12.00 <span class="text-decoration-line-through text-danger">$14.00</span></h4>
                            <a href="{{ route('domain.buy', ['domain' => $domain]) }}" class="btn btn-primary btn-sm">Make it yours</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-4 shadow-md rounded">
                        <div class="text-left">
                            @if ($available)
                                <span class="badge text-bg-success">Domain Available</span>
                                <h4 class="title title-dark mt-2 mb-2">{{$domain}}<span class="text-primary">.shop</span></h4>
                            @else
                                <span class="badge text-bg-secondary">Domain Taken</span>
                                <svg class="uxicon-svg-container" height="24" width="24" role="presentation">
                                    <use fill="currentColor" xlink:href="#svg-container-no"></use>
                                </svg>
                            @endif
                        </div>
                        <div class="text-end">
                            <h4 class="title title-dark mb-2">$12.00 <span class="text-decoration-line-through text-danger">$14.00</span></h4>
                            <a href="{{ route('domain.buy', ['domain' => $domain]) }}" class="btn btn-primary btn-sm">Make it yours</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center p-4 shadow-md rounded">
                        <div class="text-left">
                            @if ($available)
                                <span class="badge text-bg-success">Domain Available</span>
                                <h4 class="title title-dark mt-2 mb-2">{{$domain}}<span class="text-primary">.org</span></h4>
                            @else
                                <span class="badge text-bg-secondary">Domain Taken</span>
                                <svg class="uxicon-svg-container" height="24" width="24" role="presentation">
                                    <use fill="currentColor" xlink:href="#svg-container-no"></use>
                                </svg>
                            @endif
                        </div>
                        <div class="text-end">
                            <h4 class="title title-dark mb-2">$12.00 <span class="text-decoration-line-through text-danger">$14.00</span></h4>
                            <a href="{{ route('domain.buy', ['domain' => $domain]) }}" class="btn btn-primary btn-sm">Make it yours</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="container">
            <h3>Search Result</h3>
            <div class="card mt-3 p-4">
                <h4>{{ $domain }}</h4>

                @if ($available)
                    <p class="text-success">✅ This domain is available!</p>
                    <a href="{{ route('domain.buy', ['domain' => $domain]) }}" class="btn btn-primary btn-sm">Buy Now</a>
                @else
                    <p class="text-danger">❌ Sorry, this domain is already taken.</p>
                @endif

                <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Search Again</a>
            </div>
        </div> --}}
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