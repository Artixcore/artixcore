<nav id="sidebar" class="sidebar">
    {{-- <a class="sidebar-brand text-center">

        {{-- <img src="{{ asset('logo.png') }}" alt="" srcset=""> --}}

    </a> --}}
    <div class="sidebar-content">

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Main
            </li>
            {{-- <li class="sidebar-item active"> --}}
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{ route('admin') }}">
                    <i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#pages" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-file"></i> <span class="align-middle">Messages</span>
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-settings.html'>Settings</a>
                    </li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-clients.html'>Clients <span
                                class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-invoice.html'>Invoice</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-pricing.html'>Pricing</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-tasks.html'>Tasks</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-chat.html'>Chat <span
                                class="sidebar-badge badge rounded-pill bg-primary">New</span></a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='pages-blank.html'>Blank Page</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a data-bs-target="#auth" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-sign-in-alt"></i> <span class="align-middle">CRM</span>
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('clients.index')}}">Clients</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('projects.index')}}">Projects</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('faqs.index')}}">FAQ</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('projects.index')}}">Contact</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('client-reviews.index')}}">Clients Review</a></li>
                </ul>
            </li>

            <li class="sidebar-header">
                Configurations
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#ui" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-flask"></i> <span class="align-middle">Pages</span>
                </a>
                <ul id="ui" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{route('menus.index')}}">Menu</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('services.index') }}">Services</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-alerts.html'>Header Info</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='ui-alerts.html'>Footer Info</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#icons" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-heart"></i> <span class="align-middle">Articles</span>
                </a>
                <ul id="icons" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.article-new') }}">New
                            Article</a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="{{ route('admin.article-list') }}">Article
                            List</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#datatables" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-table"></i> <span class="align-middle">API, Social and
                        SEO</span>
                </a>
                <ul id="datatables" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class="sidebar-link"
                            href="{{route('metas.index')}}">Meta List</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='tables-datatables-buttons.html'>Table with
                            Buttons</a></li>
                    <li class="sidebar-item"><a class='sidebar-link'
                            href='tables-datatables-column-search.html'>Column Search</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='tables-datatables-fixed-header.html'>Fixed
                            Header</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='tables-datatables-multi.html'>Multi
                            Selection</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='tables-datatables-ajax.html'>Ajax
                            Sourced Data</a></li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#charts" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-chart-pie"></i> <span
                        class="align-middle">Analytics</span>
                </a>
                <ul id="charts" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='charts-chartjs.html'>Chart.js</a>
                    </li>
                    <li class="sidebar-item"><a class='sidebar-link' href='charts-apexcharts.html'>ApexCharts</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#forms" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-check-square"></i> <span
                        class="align-middle">Forms</span>
                </a>
                <ul id="forms" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='forms-layouts.html'>Layouts</a>
                    </li>
                    <li class="sidebar-item"><a class='sidebar-link' href='forms-basic-elements.html'>Basic
                            Elements</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='forms-advanced-elements.html'>Advanced
                            Elements</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='forms-floating-labels.html'>Floating
                            Labels</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='forms-input-groups.html'>Input
                            Groups</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='forms-editors.html'>Editors</a>
                    </li>
                    <li class="sidebar-item"><a class='sidebar-link' href='forms-validation.html'>Validation</a></li>
                    <li class="sidebar-item"><a class='sidebar-link' href='forms-wizard.html'>Wizard</a></li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='tables-bootstrap.html'>
                    <i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">User
                        Management</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a data-bs-target="#maps" data-bs-toggle="collapse" class="sidebar-link collapsed">
                    <i class="align-middle me-2 fas fa-fw fa-map-marker-alt"></i> <span
                        class="align-middle">Location</span>
                </a>
                <ul id="maps" class="sidebar-dropdown list-unstyled collapse " data-bs-parent="#sidebar">
                    <li class="sidebar-item"><a class='sidebar-link' href='maps-google.html'>Google Maps</a>
                    </li>
                    <li class="sidebar-item"><a class='sidebar-link' href='maps-vector.html'>Vector Maps</a>
                    </li>
                </ul>
            </li>


        </ul>
    </div>
</nav>
