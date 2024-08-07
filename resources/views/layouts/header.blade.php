<header class="header-absolute header-sticky">
    <!-- Nav START -->
    <nav class="navbar navbar-expand-xl">
        <div class="container">
            <!-- Logo START -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img class="light-mode-item navbar-brand-item" src="{{ asset('logo.png') }}" title="Artixcore"
                    alt="Artixcore logo">
            </a>
            <!-- Logo END -->

            <!-- Main navbar START -->
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-nav-scroll dropdown-hover ms-auto">
                    @php
                        $menus = App\Models\Menu::all();
                    @endphp
                    @foreach ($menus as $menu)
                        <!-- Nav item -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-haspopup="true"
                                aria-expanded="false">{{ $menu->menu }}</a>
                            <ul class="dropdown-menu">
                                @php
                                    $submenus = App\Models\Sub_Menu::where('menu_id', $menu->id)->get();
                                @endphp
                                @foreach ($submenus as $submenu)
                                    <!-- Dropdown submenu -->
                                    <li class="dropdown dropend">
                                        <a class="nav-link dropdown-link dropdown-toggle" data-bs-toggle="dropdown"
                                            href="#">{{ $submenu->submenu }}</a>

                                        <ul class="dropdown-menu" data-bs-popper="none">
                                            @php
                                                $subsubmenus = App\Models\Sub__subMenu::where(
                                                    'submenu_id',
                                                    $submenu->id,
                                                )->get();
                                            @endphp
                                            @foreach ($subsubmenus as $subsubmenu)
                                                <li> <a class="dropdown-item"
                                                        href="">{{ $subsubmenu->subsubmenu }}</a></li>
                                            @endforeach

                                        </ul>
                                    </li>
                                @endforeach

                            </ul>
                        </li>
                    @endforeach

                </ul>
            </div>
            <!-- Main navbar END -->

            <!-- Buttons -->
            <ul class="nav align-items-center dropdown-hover ms-sm-2">

                <!-- Sign up button -->
                @guest
                    <!-- Show login link if the user is not authenticated -->
                    <li class="nav-item me-2 d-none d-sm-block">
                        <a href="{{ route('login') }}" class="btn btn-sm btn-light mb-0">
                            <i class="bi bi-person-circle me-1"></i>Login
                        </a>
                    </li>
                @endguest

                @auth
                    <ul>
                        @if (auth()->user()->hasRole('admin'))
                            <li class="nav-item me-2 d-none d-sm-block"><a class="btn btn-sm btn-light mb-0"
                                    href="{{ route('admin') }}">Admin Dashboard</a></li>
                        @endif

                        @if (auth()->user()->hasRole('superadmin'))
                            <li class="nav-item me-2 d-none d-sm-block"><a class="btn btn-sm btn-light mb-0"
                                    href="{{ route('superadmin') }}">Super Admin Dashboard</a></li>
                        @endif

                        @if (auth()->user()->hasRole('seo'))
                            <li class="nav-item me-2 d-none d-sm-block"><a class="btn btn-sm btn-light mb-0"
                                    href="{{ route('seo') }}">SEO Dashboard</a></li>
                        @endif

                        @if (auth()->user()->hasRole('article_writer'))
                            <li class="nav-item me-2 d-none d-sm-block"><a class="btn btn-sm btn-light mb-0"
                                    href="{{ route('article_writer') }}">Article Writer Dashboard</a></li>
                        @endif
                    </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <li class="nav-item me-2 d-none d-sm-block">
                        <a class="btn btn-sm btn-light mb-0" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                @endauth

                <!-- Responsive navbar toggler -->
                <li class="nav-item">
                    <button class="navbar-toggler ms-sm-3 p-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-animation">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                    </button>
                </li>
            </ul>

        </div>
    </nav>
    <!-- Nav END -->
</header>
<!-- Header END -->
