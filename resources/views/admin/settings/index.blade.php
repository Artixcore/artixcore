@extends('admin.master.master')
@section('content')
    <div class="main">
        <nav class="navbar navbar-expand navbar-theme">
            <a class="sidebar-toggle d-flex me-2">
                <i class="hamburger align-self-center"></i>
            </a>

            <form class="d-none d-sm-inline-block">
                <input class="form-control form-control-lite" type="text" placeholder="Search projects..." />
            </form>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle position-relative" href="#" id="messagesDropdown"
                            data-bs-toggle="dropdown">
                            <i class="align-middle fas fa-envelope-open"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0"
                            aria-labelledby="messagesDropdown">
                            <div class="dropdown-menu-header">
                                <div class="position-relative">
                                    4 New Messages
                                </div>
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <img src="img/avatars/avatar-5.jpg" class="avatar img-fluid rounded-circle"
                                                alt="Michelle Bilodeau" />
                                        </div>
                                        <div class="col-10 ps-2">
                                            <div class="text-dark">
                                                Michelle Bilodeau
                                            </div>
                                            <div class="text-muted small mt-1">
                                                Nam pretium turpis et
                                                arcu. Duis arcu tortor.
                                            </div>
                                            <div class="text-muted small mt-1">
                                                5m ago
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <img src="img/avatars/avatar-3.jpg" class="avatar img-fluid rounded-circle"
                                                alt="Kathie Burton" />
                                        </div>
                                        <div class="col-10 ps-2">
                                            <div class="text-dark">
                                                Kathie Burton
                                            </div>
                                            <div class="text-muted small mt-1">
                                                Pellentesque auctor
                                                neque nec urna.
                                            </div>
                                            <div class="text-muted small mt-1">
                                                30m ago
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <img src="img/avatars/avatar-2.jpg" class="avatar img-fluid rounded-circle"
                                                alt="Alexander Groves" />
                                        </div>
                                        <div class="col-10 ps-2">
                                            <div class="text-dark">
                                                Alexander Groves
                                            </div>
                                            <div class="text-muted small mt-1">
                                                Curabitur ligula sapien
                                                euismod vitae.
                                            </div>
                                            <div class="text-muted small mt-1">
                                                2h ago
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <img src="img/avatars/avatar-4.jpg" class="avatar img-fluid rounded-circle"
                                                alt="Daisy Seger" />
                                        </div>
                                        <div class="col-10 ps-2">
                                            <div class="text-dark">
                                                Daisy Seger
                                            </div>
                                            <div class="text-muted small mt-1">
                                                Aenean tellus metus,
                                                bibendum sed, posuere
                                                ac, mattis non.
                                            </div>
                                            <div class="text-muted small mt-1">
                                                5h ago
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all messages</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ms-lg-2">
                        <a class="nav-link dropdown-toggle position-relative" href="#" id="alertsDropdown"
                            data-bs-toggle="dropdown">
                            <i class="align-middle fas fa-bell"></i>
                            <span class="indicator"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                            <div class="dropdown-menu-header">
                                4 New Notifications
                            </div>
                            <div class="list-group">
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="ms-1 text-danger fas fa-fw fa-bell"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">
                                                Update completed
                                            </div>
                                            <div class="text-muted small mt-1">
                                                Restart server 12 to
                                                complete the update.
                                            </div>
                                            <div class="text-muted small mt-1">
                                                2h ago
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="ms-1 text-warning fas fa-fw fa-envelope-open"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">
                                                Lorem ipsum
                                            </div>
                                            <div class="text-muted small mt-1">
                                                Aliquam ex eros,
                                                imperdiet vulputate
                                                hendrerit et.
                                            </div>
                                            <div class="text-muted small mt-1">
                                                6h ago
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="ms-1 text-primary fas fa-fw fa-building"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">
                                                Login from 192.186.1.1
                                            </div>
                                            <div class="text-muted small mt-1">
                                                8h ago
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" class="list-group-item">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-2">
                                            <i class="ms-1 text-success fas fa-fw fa-bell-slash"></i>
                                        </div>
                                        <div class="col-10">
                                            <div class="text-dark">
                                                New connection
                                            </div>
                                            <div class="text-muted small mt-1">
                                                Anna accepted your
                                                request.
                                            </div>
                                            <div class="text-muted small mt-1">
                                                12h ago
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="dropdown-menu-footer">
                                <a href="#" class="text-muted">Show all notifications</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown ms-lg-2">
                        <a class="nav-link dropdown-toggle position-relative" href="#" id="userDropdown"
                            data-bs-toggle="dropdown">
                            <i class="align-middle fas fa-cog"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-user"></i>
                                View Profile</a>
                            <a class="dropdown-item" href="#"><i
                                    class="align-middle me-1 fas fa-fw fa-comments"></i>
                                Contacts</a>
                            <a class="dropdown-item" href="#"><i
                                    class="align-middle me-1 fas fa-fw fa-chart-pie"></i>
                                Analytics</a>
                            <a class="dropdown-item" href="#"><i class="align-middle me-1 fas fa-fw fa-cogs"></i>
                                Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i
                                    class="align-middle me-1 fas fa-fw fa-arrow-alt-circle-right"></i>
                                Sign out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="content">
            <div class="container-fluid">
                <div class="header">
                    <h1 class="header-title">Settings</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="dashboard-default.html">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Pages</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Settings
                            </li>
                        </ol>
                    </nav>
                </div>
                <div class="row">
                    <div class="col-md-3 col-xl-2">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">
                                    Profile Settings
                                </h5>
                            </div>

                            <div class="list-group list-group-flush" role="tablist">
                                <a class="list-group-item list-group-item-action active" data-bs-toggle="list"
                                    href="#account" role="tab">
                                    Account
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#password"
                                    role="tab">
                                    Password
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                                    role="tab">
                                    Privacy and safety
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                                    role="tab">
                                    Email notifications
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                                    role="tab">
                                    Web notifications
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                                    role="tab">
                                    Widgets
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                                    role="tab">
                                    Your data
                                </a>
                                <a class="list-group-item list-group-item-action" data-bs-toggle="list" href="#"
                                    role="tab">
                                    Delete account
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9 col-xl-10">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="account" role="tabpanel">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-actions float-end">
                                            <a href="#" class="me-1">
                                                <i class="align-middle" data-feather="refresh-cw"></i>
                                            </a>
                                            <div class="d-inline-block dropdown show">
                                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                                    <i class="align-middle" data-feather="more-vertical"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="card-title mb-0">
                                            Public info
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="mb-3">
                                                        <label for="inputUsername">Username</label>
                                                        <input type="text" class="form-control" id="inputUsername"
                                                            placeholder="Username" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="inputUsername">Biography</label>
                                                        <textarea rows="2" class="form-control" id="inputBio" placeholder="Tell something about yourself"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="text-center">
                                                        <img alt="Chris Wood" src="img/avatars/avatar.jpg"
                                                            class="rounded-circle img-responsive mt-2" width="128"
                                                            height="128" />
                                                        <div class="mt-2">
                                                            <span class="btn btn-primary"><i class="fas fa-upload"></i>
                                                                Upload</span>
                                                        </div>
                                                        <small>For best
                                                            results, use
                                                            an image at
                                                            least 128px
                                                            by 128px in
                                                            .jpg
                                                            format</small>
                                                    </div>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-primary">
                                                Save changes
                                            </button>
                                        </form>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-actions float-end">
                                            <a href="#" class="me-1">
                                                <i class="align-middle" data-feather="refresh-cw"></i>
                                            </a>
                                            <div class="d-inline-block dropdown show">
                                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                                    <i class="align-middle" data-feather="more-vertical"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another
                                                        action</a>
                                                    <a class="dropdown-item" href="#">Something else
                                                        here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="card-title mb-0">
                                            Private info
                                        </h5>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="inputFirstName">First
                                                        name</label>
                                                    <input type="text" class="form-control" id="inputFirstName"
                                                        placeholder="First name" />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="inputLastName">Last
                                                        name</label>
                                                    <input type="text" class="form-control" id="inputLastName"
                                                        placeholder="Last name" />
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputEmail4">Email</label>
                                                <input type="email" class="form-control" id="inputEmail4"
                                                    placeholder="Email" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputAddress">Address</label>
                                                <input type="text" class="form-control" id="inputAddress"
                                                    placeholder="1234 Main St" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputAddress2">Address 2</label>
                                                <input type="text" class="form-control" id="inputAddress2"
                                                    placeholder="Apartment, studio, or floor" />
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="inputCity">City</label>
                                                    <input type="text" class="form-control" id="inputCity" />
                                                </div>
                                                <div class="mb-3 col-md-4">
                                                    <label for="inputState">State</label>
                                                    <select id="inputState" class="form-control">
                                                        <option selected>
                                                            Choose...
                                                        </option>
                                                        <option>
                                                            ...
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-2">
                                                    <label for="inputZip">Zip</label>
                                                    <input type="text" class="form-control" id="inputZip" />
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                Save changes
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="password" role="tabpanel">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            Password
                                        </h5>

                                        <form>
                                            <div class="mb-3">
                                                <label for="inputPasswordCurrent">Current
                                                    password</label>
                                                <input type="password" class="form-control" id="inputPasswordCurrent" />
                                                <small><a href="#">Forgot your
                                                        password?</a></small>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputPasswordNew">New password</label>
                                                <input type="password" class="form-control" id="inputPasswordNew" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputPasswordNew2">Verify
                                                    password</label>
                                                <input type="password" class="form-control" id="inputPasswordNew2" />
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                Save changes
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-8 text-start">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Terms of Service</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="#">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4 text-end">
                        <p class="mb-0">
                            &copy; 2023 -
                            <a class="text-muted" href="dashboard-default.html">Spark</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
