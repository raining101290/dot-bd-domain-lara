@extends('layouts.master')
@section('content')
<div class="container py-5 mt-100">
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
</div>
@endsection