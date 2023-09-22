        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route("dashboard") }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{ ENV("APP_NAME") }}</div>
            </a>

            <hr class="sidebar-divider my-0">

            @include("layouts.sidebar_item", [
                "icon"  => "tachometer-alt",
                "route" => route("dashboard"),
                "title" => "dashboard",
            ])

            @include("layouts.sidebar_item", [
                "icon"  => "key",
                "route" => route("role.index"),
                "title" => "role",
            ])

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
