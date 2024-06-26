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
                        {{-- <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-ship" viewBox="0 0 16 16">
                                <path d="M6 0a1 1 0 0 1 1 1v1.5h2V1a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v10.245c0 .263-.105.52-.29.71l-3.163 3.163a.5.5 0 0 1-.707 0L2.29 11.955a.5.5 0 0 1 0-.707L5.453 8.085a.5.5 0 0 1 .71.71L3.414 11h7.172l-2.749-2.749a.5.5 0 0 1 .707-.707L12 10.543V2a1 1 0 0 1-1-1H6z"/>
                                <path fill-rule="evenodd" d="M1.5 12.5a1 1 0 0 1 1 1v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a1 1 0 0 1 1-1zM14 12.5a1 1 0 0 0-1 1v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a1 1 0 0 0-1-1zM3 13a1 1 0 0 1-1 1 1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h1.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H3zm10 0a.5.5 0 0 1-.5.5H12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5H13a1 1 0 0 1 1 1v1zM4.5 13h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5z"/>
                              </svg>
                        </span> --}}
                        <span class="nav-link-text">Wartsila</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('storage-tank-gauge') ? 'active' : '' }}" href="{{route('storage-tank-gauge')}}">
                        {{-- <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-ship" viewBox="0 0 16 16">
                                <path d="M6 0a1 1 0 0 1 1 1v1.5h2V1a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v10.245c0 .263-.105.52-.29.71l-3.163 3.163a.5.5 0 0 1-.707 0L2.29 11.955a.5.5 0 0 1 0-.707L5.453 8.085a.5.5 0 0 1 .71.71L3.414 11h7.172l-2.749-2.749a.5.5 0 0 1 .707-.707L12 10.543V2a1 1 0 0 1-1-1H6z"/>
                                <path fill-rule="evenodd" d="M1.5 12.5a1 1 0 0 1 1 1v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a1 1 0 0 1 1-1zM14 12.5a1 1 0 0 0-1 1v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a1 1 0 0 0-1-1zM3 13a1 1 0 0 1-1 1 1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h1.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H3zm10 0a.5.5 0 0 1-.5.5H12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5H13a1 1 0 0 1 1 1v1zM4.5 13h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5z"/>
                              </svg>
                        </span> --}}
                        <span class="nav-link-text">Storage Tank</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('cargo-tank') ? 'active' : '' }}" href="{{route('cargo-tank')}}">
                        {{-- <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-ship" viewBox="0 0 16 16">
                                <path d="M6 0a1 1 0 0 1 1 1v1.5h2V1a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v10.245c0 .263-.105.52-.29.71l-3.163 3.163a.5.5 0 0 1-.707 0L2.29 11.955a.5.5 0 0 1 0-.707L5.453 8.085a.5.5 0 0 1 .71.71L3.414 11h7.172l-2.749-2.749a.5.5 0 0 1 .707-.707L12 10.543V2a1 1 0 0 1-1-1H6z"/>
                                <path fill-rule="evenodd" d="M1.5 12.5a1 1 0 0 1 1 1v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a1 1 0 0 1 1-1zM14 12.5a1 1 0 0 0-1 1v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a1 1 0 0 0-1-1zM3 13a1 1 0 0 1-1 1 1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h1.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H3zm10 0a.5.5 0 0 1-.5.5H12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5H13a1 1 0 0 1 1 1v1zM4.5 13h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5z"/>
                              </svg>
                        </span> --}}
                        <span class="nav-link-text">Cargo Tank</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('main-engine') ? 'active' : '' }}" href="{{route('main-engine')}}">
                        {{-- <span class="nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-ship" viewBox="0 0 16 16">
                                <path d="M6 0a1 1 0 0 1 1 1v1.5h2V1a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v10.245c0 .263-.105.52-.29.71l-3.163 3.163a.5.5 0 0 1-.707 0L2.29 11.955a.5.5 0 0 1 0-.707L5.453 8.085a.5.5 0 0 1 .71.71L3.414 11h7.172l-2.749-2.749a.5.5 0 0 1 .707-.707L12 10.543V2a1 1 0 0 1-1-1H6z"/>
                                <path fill-rule="evenodd" d="M1.5 12.5a1 1 0 0 1 1 1v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a1 1 0 0 1 1-1zM14 12.5a1 1 0 0 0-1 1v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a1 1 0 0 0-1-1zM3 13a1 1 0 0 1-1 1 1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h1.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H3zm10 0a.5.5 0 0 1-.5.5H12a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5H13a1 1 0 0 1 1 1v1zM4.5 13h7a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5z"/>
                              </svg>
                        </span> --}}
                        <span class="nav-link-text">Main Engine</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>





