<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
		<a href="/" class="logo"><img src="{{ asset('img/pc/koushou.png') }}" width="30" alt=""/></a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
										{{-- <a href="{{ url("-/manager/logout") }}" class="dropdown-toggle"> --}}
                    {{--     <span class="hidden-xs">Logout</span> --}}
                    {{-- </a> --}}
                </li>
            </ul>
        </div>
    </nav>
</header>
