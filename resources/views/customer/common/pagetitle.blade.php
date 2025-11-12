<div class="d-flex align-items-center justify-content-between">
    <div>
        <h6 class="text-muted mb-1">Welcome back, <span class="fullname"></span>!</h6>
        <h5 class="mb-0">
            @if(request()->routeIs('customer.dashboard'))
                Dashboard
            @elseif(request()->routeIs('customer.domains'))
                My Domains
            @elseif(request()->routeIs('customer.billing'))
                Billing & Invoices
            @elseif(request()->routeIs('customer.profile'))
                My Profile
            @elseif(request()->routeIs('customer.support'))
                Support
            @else
                Page
            @endif
        </h5>
    </div>
</div>