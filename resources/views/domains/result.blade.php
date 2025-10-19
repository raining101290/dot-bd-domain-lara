@extends('layouts.master')

@section('content')
    <section class="py-5 mt-100">
        <div class="container">
            <h3>Search Result</h3>
            <div class="card mt-3 p-4">
                <h4>{{ $domain }}</h4>

                @if ($available)
                    <p class="text-success">✅ This domain is available!</p>
                    <a href="{{ route('domain.buy', ['domain' => $domain]) }}" class="btn btn-primary">Buy Now</a>
                @else
                    <p class="text-danger">❌ Sorry, this domain is already taken.</p>
                @endif

                <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Search Again</a>
            </div>
        </div>
    </section>
@endsection