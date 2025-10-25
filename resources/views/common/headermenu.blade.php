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
        
        <ul class="buy-button list-inline mb-0">
            @auth
                <li class="list-inline-item mb-0">
                    <a href="{{ route('dashboard') }}">
                        <div class="btn btn-primary btn-sm"> Dashboard </div>
                    </a>
                </li>
            @endauth
            @guest
            <li class="list-inline-item mb-0">
                <a href="/login">
                    <div class="btn btn-primary btn-sm"> Login </div>
                </a>
            </li>
            @endguest
        </ul>
        <div id="navigation">
            <ul class="navigation-menu nav-light">
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
                <li><a href="" class="sub-menu-item">Contact</a></li>
            </ul>
        </div>
    </div>
</header>