<header id="topnav" class="defaultscroll sticky nav-sticky">
    <div class="container">
        <a class="logo handlee text-success" href="/">
            <i data-feather="globe" class="fea icon-md mb-1"></i> DomainDesk
        </a>

        <div class="menu-extras">
            <div class="menu-item">
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
        
        <ul class="buy-button list-inline mb-0 auth-links">
            {{-- System User via Laravel Auth --}}
            @auth
                <li class="list-inline-item mb-0">
                    <a href="{{ route('dashboard') }}">
                        <div class="btn btn-primary btn-sm">Dashboard</div>
                    </a>
                </li>

            {{-- Customer logged in via token --}}    
            @else
                @if(request()->cookie('customer_token') || session('customer_token'))
                    <li class="list-inline-item mb-0">
                        <a href="{{ route('customer.dashboard') }}">
                            <div class="btn btn-primary btn-sm">Customer Dashboard</div>
                        </a>
                    </li>

                {{-- Guest (no login at all) --}}
                @else
                    <li class="list-inline-item mb-0">
                        <a href="/customer/login">
                            <div class="btn btn-secondary btn-sm">Login</div>
                        </a>
                    </li>
                    <li class="list-inline-item mb-0">
                        <a href="/customer/register">
                            <div class="btn btn-success btn-sm">Register</div>
                        </a>
                    </li>
                @endif
            @endauth
        </ul>
        <div id="navigation">
            <ul class="navigation-menu nav-light">
                <li><a href="/" class="sub-menu-item">Home</a></li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Buy Domain</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        @foreach ($domains as $domain)
                            <li>
                                <a href="{{ route('tld.show', ltrim($domain->name, '.')) }}" class="sub-menu-item">
                                    {{ $domain->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="/contact" class="sub-menu-item">Contact</a></li>
            </ul>
        </div>
    </div>
</header>