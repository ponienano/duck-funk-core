@extends('housekeeping::layouts.master')

@section('content')
    <!-- Begin page -->
    <div id="wrapper">

        @include('housekeeping::partials.top-bar')
        @include('housekeeping::partials.left-menu')

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content dasboard-content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Tablero</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Bienvenido al tablero</li>
                                </ol>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <a href="{{ route('hotel') }}" target="_blank" class="btn btn-danger dropdown-toggle arrow-none waves-effect waves-light" type="button">
                                            <i class="mdi mdi-chat mr-2"></i> Entrar al hotel
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end row -->
                    </div>
                    <!-- end page-title -->

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card mini-stat bg-pattern">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="dripicons-user-group bg-soft-primary text-primary float-right h4"></i>
                                    </div>
                                    <h6 class="text-uppercase mb-3 mt-0">Registros</h6>
                                    <h5 class="mb-3">541</h5>
                                    <p class="text-muted mb-0"><span class="text-success mr-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> más que la semana pasada</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mini-stat bg-pattern">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="dripicons-monitor bg-soft-primary text-primary float-right h4"></i>
                                    </div>
                                    <h6 class="text-uppercase mb-3 mt-0">Errores</h6>
                                    <h5 class="mb-3">123</h5>
                                    <p class="text-muted mb-0"><span class="text-danger mr-2"> -26% <i class="mdi mdi-arrow-down"></i> </span> menos que la semana pasada</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mini-stat bg-pattern">
                                <div class="card-body mini-stat-img">
                                    <div class="mini-stat-icon">
                                        <i class="dripicons-heart bg-soft-primary text-primary float-right h4"></i>
                                    </div>
                                    <h6 class="text-uppercase mb-3 mt-0">Mensajes</h6>
                                    <h5 class="mb-3">12,512</h5>
                                    <p class="text-muted mb-0"><span class="text-danger mr-2"> -26% <i class="mdi mdi-arrow-down"></i> </span> Menos que la semana pasada</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Usuarios activos</h4>

                                    <div id="world-map-markers" class="dashboard-map-wid"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Weekly Sales</h4>

                                    <div id="area-chart" dir="ltr"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Email Sent</h4>

                                    <div id="column-chart" dir="ltr"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Earning</h4>

                                    <div>
                                        <div class="wid-earning">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <h5 class="mt-0">$1,452</h5>
                                                        <p class="text-muted mb-md-0">Weekly</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="chart1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wid-earning">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <h5 class="mt-0">$4,150</h5>
                                                        <p class="text-muted mb-md-0">Monthly</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="chart2"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wid-earning">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <h5 class="mt-0">$38,759</h5>
                                                        <p class="text-muted mb-md-0">Yearly</p>

                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div id="chart3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xl-4">
                            <div class="card messages ">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Recent stock</h4>
                                    <nav>
                                        <div class="nav nav-tabs tab-wid recent-stock-widget nav-justified" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-comp-tab" data-toggle="tab" href="#nav-comp" role="tab" aria-controls="nav-comp" aria-selected="true">
                                                <i class="dripicons-device-desktop h4 product-icon"></i>
                                                <p class="text-muted mb-0">Comp</p>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-laptop-tab" data-toggle="tab" href="#nav-laptop" role="tab" aria-controls="nav-laptop" aria-selected="false">
                                                <i class="dripicons-monitor h4 product-icon"></i>
                                                <p class="text-muted mb-0">Lap</p>
                                            </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-comp" role="tabpanel" aria-labelledby="nav-comp-tab">
                                            <div class="text-center">
                                                <div id="radial-chart"></div>
                                                <h5 class="font-18">Computer</h5>
                                                <p class="text-muted mb-0">Neque porro quisquam est</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-laptop" role="tabpanel" aria-labelledby="nav-laptop-tab">
                                            <div class="text-center">
                                                <div id="radial-chart-2"></div>
                                                <h5 class="font-18">Laptop</h5>
                                                <p class="text-muted mb-0">Ut enim ad veniam quis</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Social Source</h4>
                                    <div id="multiple-radial-chart" dir="ltr"></div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- end row -->

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Latest Transactions</h4>
                                    <div class="table-responsive">
                                        <table class="table table-nowrap mb-0">
                                            <tbody>
                                            <tr>
                                                <td style="width: 60px;">
                                                    <img src="assets/images/users/user-2.jpg" alt="" class="thumb-sm rounded-circle">
                                                </td>
                                                <td>David Wiley
                                                    <p class="m-0 text-muted">On 02 Jun, 2019</p>
                                                </td>
                                                <td>Desktop</td>
                                                <td>
                                                    <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
                                                </td>
                                                <td>
                                                    $2105
                                                    <p class="m-0 text-muted font-14">Amount</p>
                                                </td>

                                                <td>
                                                    <div>
                                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/user-3.jpg" alt="" class="thumb-sm rounded-circle">
                                                </td>

                                                <td>Michael Gatlin
                                                    <p class="m-0 text-muted">On 03 Jun, 2019</p>
                                                </td>
                                                <td>laptop</td>
                                                <td>
                                                    <i class="mdi mdi-checkbox-blank-circle text-danger mr-1"></i> Payment expired
                                                </td>
                                                <td>
                                                    $1825
                                                    <p class="m-0 text-muted font-14">Amount</p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/user-4.jpg" alt="" class="thumb-sm rounded-circle">
                                                </td>
                                                <td>Steve Dietrich
                                                    <p class="m-0 text-muted">On 05 Jun, 2019</p>
                                                </td>
                                                <td>Tablet</td>
                                                <td>
                                                    <i class="mdi mdi-checkbox-blank-circle text-warning mr-1"></i> Waiting payment
                                                </td>
                                                <td>
                                                    $1460
                                                    <p class="m-0 text-muted font-14">Amount</p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/user-5.jpg" alt="" class="thumb-sm rounded-circle">
                                                </td>
                                                <td>James Harris
                                                    <p class="m-0 text-muted">On 07 Jun, 2019</p>
                                                </td>
                                                <td>Mobile</td>
                                                <td>
                                                    <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
                                                </td>
                                                <td>
                                                    $1434
                                                    <p class="m-0 text-muted font-14">Amount</p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/images/users/user-6.jpg" alt="" class="thumb-sm rounded-circle">
                                                </td>
                                                <td>Clay Johnson
                                                    <p class="m-0 text-muted">On 08 Jun, 2019</p>
                                                </td>
                                                <td>laptop</td>
                                                <td>
                                                    <i class="mdi mdi-checkbox-blank-circle text-success mr-1"></i> Confirm
                                                </td>
                                                <td>
                                                    $1759
                                                    <p class="m-0 text-muted font-14">Amount</p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-xl-4">
                            <div class="card messages">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title mb-4">Latest Messages</h4>
                                    <nav>
                                        <div class="nav nav-tabs messages-tabs tab-wid nav-justified" role="tablist">
                                            <a class="nav-item nav-link active" id="nav-first-tab" data-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="true">
                                                <h5 class="mt-0 date">10</h5>
                                                <p class="text-muted mb-0">June</p>
                                            </a>
                                            <a class="nav-item nav-link" id="nav-second-tab" data-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="false">
                                                <h5 class="mt-0 date">12</h5>
                                                <p class="text-muted mb-0">June</p>
                                            </a>
                                        </div>
                                    </nav>
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                                            <div class="p-2 mt-2">
                                                <ul class="list-unstyled latest-message-list mb-0">
                                                    <li class="message-list-item">
                                                        <a href="#">
                                                            <div class="media">
                                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-2.jpg" alt="">
                                                                <div class="media-body">
                                                                    <p class="float-right font-12 text-muted">Just Now</p>
                                                                    <h6 class="mt-0">Mary Frye</h6>
                                                                    <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="message-list-item">
                                                        <a href="#">
                                                            <div class="media">
                                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-3.jpg" alt="">
                                                                <div class="media-body">
                                                                    <p class="float-right font-12 text-muted">11:42am</p>
                                                                    <h6 class="mt-0">David Smith</h6>
                                                                    <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="message-list-item">
                                                        <a href="#" >
                                                            <div class="media">
                                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-4.jpg" alt="">
                                                                <div class="media-body">
                                                                    <p class="float-right font-12 text-muted">01:56pm</p>
                                                                    <h6 class="mt-0">Troy Long</h6>
                                                                    <p class="text-muted mb-0">This theme is awesome!</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center">
                                                <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                                            <div class="p-2 mt-2">
                                                <ul class="list-unstyled latest-message-list mb-0">
                                                    <li class="message-list-item">
                                                        <a href="#">
                                                            <div class="media">
                                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-5.jpg" alt="">
                                                                <div class="media-body">
                                                                    <p class="float-right font-12 text-muted">09:42am</p>
                                                                    <h6 class="mt-0">John Carle</h6>
                                                                    <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="message-list-item">
                                                        <a href="#">
                                                            <div class="media">
                                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-6.jpg" alt="">
                                                                <div class="media-body">
                                                                    <p class="float-right font-12 text-muted">11:07am</p>
                                                                    <h6 class="mt-0">Jerry Carter</h6>
                                                                    <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="message-list-item">
                                                        <a href="#">
                                                            <div class="media">
                                                                <img class="mr-3 thumb-md rounded-circle" src="assets/images/users/user-7.jpg" alt="">
                                                                <div class="media-body">
                                                                    <p class="float-right font-12 text-muted">01:17pm</p>
                                                                    <h6 class="mt-0">Shane Hill</h6>
                                                                    <p class="text-muted mb-0">This theme is awesome!</p>

                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="text-center">
                                                <a href="#" class="btn btn-primary btn-sm">Load more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab-content -->
                                </div>
                            </div>
                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

                </div>
                <!-- container-fluid -->

            </div>
            <!-- content -->

            <footer class="footer">
                © 2019 Veltrix <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</span>.
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <div class="right-sidebar d-none d-xl-block">
        <div class="slimscroll-menu">
            <div class="px-4 pt-4">
                <div class="card user-wid text-center overflow-hidden">
                    <div class="p-4 bg-lighten-danger"></div>
                    <div class="mx-3">
                        <div class="bg-white user-wid-content p-1 rounded">
                            <div class="user-img">
                                <img src="{{ config('duck-funk.hotel') }}habbo-imaging/avatarimage?figure={{ core()->user()->look }}&direction=3&head_direction=4&gesture=sml&action=&size=n&headonly=1" alt="user-img" class="rounded-circle img-fluid">
                            </div>
                            <h5 class="font-14 mb-1"><a href="javascript: void(0);">{{ core()->user()->username }}</a> </h5>
                            <p class="text-muted mb-2"><small>{{ core()->user()->permissions->rank_name }}</small></p>
                        </div>
                    </div>
                </div>

                <div>
                    <h5 class="font-14">Clients</h5>

                    <div id="world-map-markers" class="dashboard-map-wid"></div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Dependencies  -->
    <script src="{{ mix('/js/initial.min.js', '/vendor/duck-funk-core') }}"></script>
    <script src="{{ mix('/js/labs/dependencies/dashboard.min.js', '/vendor/duck-funk-core') }}"></script>

    <!-- App js -->
    <script src="{{ mix('/js/housekeeping/app.js', '/vendor/duck-funk-core') }}"></script>
    <script src="{{ mix('/js/housekeeping/legacy/labs.js', '/vendor/duck-funk-core') }}"></script>
    <script>
        $(function() {
            let dashboard = new Dashboard('https://raw.githubusercontent.com/torralbodavid/duck-funk-core/master/CHANGELOG.md', '{{ route('dashboard-parser') }}');
            dashboard.dashboardWall()
        });
    </script>
@endsection
