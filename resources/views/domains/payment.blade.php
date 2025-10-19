@extends('layouts.master')
@section('content')
    <section class="py-5 mt-100">
        <div class="container">
            <h3>Payment for {{ $domain }}</h3>
            <p>Here you can integrate your payment gateway (SSLCommerz, Stripe, etc.).</p>
        </div>
    </section>
@endsection
