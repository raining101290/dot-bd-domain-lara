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
            <li class="list-inline-item mb-0">
                <a href="login.php">
                    <div class="btn btn-primary btn-sm"> Login </div>
                </a>
            </li>

            <li class="list-inline-item ps-1 mb-0">
                <a href="domain-registration.php">
                    <div class="btn btn-light btn-sm"> Sign Up </div>
                </a>
            </li>
        </ul>
        <div id="navigation">
            <ul class="navigation-menu nav-light">
                <li><a href="/" class="sub-menu-item">Home</a></li>
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Buy Domain</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <?php foreach ($domains as $domain): ?>
                            <li><a href="./<?php echo $domain->url; ?>" class="sub-menu-item"><?php echo $domain->domain; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="" class="sub-menu-item">Contact</a></li>
            </ul>
        </div>
    </div>
</header>