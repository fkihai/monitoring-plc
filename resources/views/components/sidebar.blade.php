<div id="app-sidepanel" class="app-sidepanel">
    <div id="sidepanel-drop" class="sidepanel-drop"></div>
    <div class="sidepanel-inner d-flex flex-column ">
        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>

        <!-- APP BRANDING -->
        <div class="app-branding">
            <a class="app-logo" href="{{route('wartsila')}}"><img class="logo-icon me-2" src="{{asset("img/app-logo.svg")}}" alt="logo"><span class="logo-text">MONITORING</span></a>
        </div>

        <!-- LIST SIDEBAR -->
        <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
            <ul class="app-menu list-unstyled accordion" id="menu-accordion">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('wartsila') ? 'active' : '' }}" href="{{route('wartsila')}}">
                        <span class="nav-link-text">Wartsila</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('storage-tank') ? 'active' : '' }}" href="{{route('storage-tank')}}">
                        <span class="nav-link-text">Storage Tank</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('cargo-tank') ? 'active' : '' }}" href="{{route('cargo-tank')}}">
                        <span class="nav-link-text">Cargo Tank</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('main-engine') ? 'active' : '' }}" href="{{route('main-engine')}}">
                        <span class="nav-link-text">Main Engine</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('certificate.index') ? 'active' : '' }}" href="{{route('certificate.index')}}">
                        <span class="nav-link-text">Certificate</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>





