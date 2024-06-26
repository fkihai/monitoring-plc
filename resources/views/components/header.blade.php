<div class="app-header-inner">
    <div class="container-fluid py-2">
        <div class="app-header-content">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto d-flex align-items-center p-1">
                    <div class="col-auto">
                        <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                            <svg class="text-white" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
                                <title>Menu</title>
                                <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                            </svg>
                        </a>
                    </div>

                    <span class="title-appbar">{{$title}}</span>

                </div>
                <div class="col-auto d-flex align-items-center">
                    <div id="_dbTime" class="me-3">
                        {{-- {{date('h:i:s', strtotime($data->created_at));}} --}}
                    </div>
                    <!-- User Dropdown -->
                    <div class="app-utility-item app-user-dropdown dropdown">
                        <a class="dropdown-toggle text-white" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            <!-- User Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person text-white" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM0 13.5a7.5 7.5 0 0 1 15 0v.5H0v-.5z"/>
                            </svg>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                            <li><a class="dropdown-item" href="login.html">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
