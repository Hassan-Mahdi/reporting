<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Reporting</title>

    <!-- Bootstrap -->
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}"
        rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets/build/css/custom.min.css') }}" rel="stylesheet">
</head>


<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Newcomers
                                Report</span></a>
                    </div>
                    <br>
                    <br>
                    <br>
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home </span></a></li>
                                <li><a><i class="fa fa-home"></i> Home Two</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- End menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="images/img.jpg" alt="">John Doe
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">Help</a>
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>
                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">6</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                    aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item">
                                            <span class="image"><img src="images/img.jpg"
                                                    alt="Profile Image" /></span>
                                            <span>
                                                <span>John Smith</span>
                                                <span class="time">3 mins ago</span>
                                            </span>
                                            <span class="message">
                                                Film festivals used to be do-or-die moments for movie makers. They were
                                                where...
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <strong>See All Alerts</strong>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                <div class="row">
                    <div class="col-md-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Communicant</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form class="form-label-left input_mask">

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                            id="inputSuccess2" placeholder="First Name">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <input type="text" class="form-control" id="inputSuccess3"
                                            placeholder="Last Name">
                                        <span class="fa fa-user form-control-feedback right"
                                            aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <input type="email" class="form-control has-feedback-left"
                                            id="inputSuccess4" placeholder="Email">
                                        <span class="fa fa-envelope form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <input type="tel" class="form-control" id="inputSuccess5"
                                            placeholder="Phone">
                                        <span class="fa fa-phone form-control-feedback right"
                                            aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-12 col-sm-6  form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                            id="inputSuccess4" placeholder="Address">
                                        <span class="fa fa-envelope form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <input id="birthday" class="date-picker form-control"
                                            placeholder="dd-mm-yyyy" type="text" required="required"
                                            type="text" onfocus="this.type='date'" onmouseover="this.type='date'"
                                            onclick="this.type='date'" onblur="this.type='text'"
                                            onmouseout="timeFunctionLong(this)">
                                        <script>
                                            function timeFunctionLong(input) {
                                                setTimeout(function() {
                                                    input.type = 'text';
                                                }, 60000);
                                            }
                                        </script>
                                    </div>

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <div class="">
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>Books</option>
                                                <option>Video</option>
                                                <option>Contact Number</option>
                                                <option>Address</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-6  form-group has-feedback">
                                        <textarea id="message" required="" class="form-control" name="message" data-parsley-trigger="keyup"
                                            placeholder="comment"></textarea>
                                    </div>

                                    <div class="col-md-12 col-sm-6 form-group has-feedback">
                                        <p>Gender:</p>
                                            Male: <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
                                            Female: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                    </div>

                                    <div class="ln_solid col-md-12 col-sm-6 form-group has-feedback"></div>
                                    <div class="col-md-12 col-sm-6 form-group has-feedback">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Feedback</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form class="form-label-left input_mask">

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                            id="inputSuccess2" placeholder="First Name">
                                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <input type="text" class="form-control" id="inputSuccess3"
                                            placeholder="Last Name">
                                        <span class="fa fa-user form-control-feedback right"
                                            aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <input type="email" class="form-control has-feedback-left"
                                            id="inputSuccess4" placeholder="Email">
                                        <span class="fa fa-envelope form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <input type="tel" class="form-control" id="inputSuccess5"
                                            placeholder="Phone">
                                        <span class="fa fa-phone form-control-feedback right"
                                            aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-12 col-sm-6  form-group has-feedback">
                                        <input type="text" class="form-control has-feedback-left"
                                            id="inputSuccess4" placeholder="Address">
                                        <span class="fa fa-envelope form-control-feedback left"
                                            aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <input id="birthday" class="date-picker form-control"
                                            placeholder="dd-mm-yyyy" type="text" required="required"
                                            type="text" onfocus="this.type='date'" onmouseover="this.type='date'"
                                            onclick="this.type='date'" onblur="this.type='text'"
                                            onmouseout="timeFunctionLong(this)">
                                        <script>
                                            function timeFunctionLong(input) {
                                                setTimeout(function() {
                                                    input.type = 'text';
                                                }, 60000);
                                            }
                                        </script>
                                    </div>

                                    <div class="col-md-6 col-sm-6  form-group has-feedback">
                                        <div class="">
                                            <select class="form-control">
                                                <option>Select</option>
                                                <option>Books</option>
                                                <option>Video</option>
                                                <option>Contact Number</option>
                                                <option>Address</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-6  form-group has-feedback">
                                        <textarea id="message" required="" class="form-control" name="message" data-parsley-trigger="keyup"
                                            placeholder="comment"></textarea>
                                    </div>

                                    <div class="col-md-6 col-sm-6 form-group has-feedback">
                                        <p>Interested to join:</p>
                                        Yes: <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
                                        No: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                    </div>

                                    <div class="col-md-6 col-sm-6 form-group has-feedback">
                                        <p>Contacted:</p>
                                            Yes: <input type="radio" class="flat" name="gender" id="genderM" value="M" checked="" required />
                                            No: <input type="radio" class="flat" name="gender" id="genderF" value="F" />
                                    </div>

                                    <div class="ln_solid col-md-12 col-sm-6 form-group has-feedback"></div>
                                    <div class="col-md-12 col-sm-6 form-group has-feedback">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Responsive example</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-box table-responsive">
                                            <table id="datatable-responsive"
                                                class="table table-striped table-bordered dt-responsive nowrap"
                                                cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Phone</th>
                                                        <th>E-mail</th>
                                                        <th>Address</th>
                                                        <th>Date</th>
                                                        <th>Comment</th>
                                                        <th>What is given</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Tiger</td>
                                                        <td>System Architect</td>
                                                        <td>Gmail.com</td>
                                                        <td>agaskfgjsdklg</td>
                                                        <td>2011/04/25</td>
                                                        <td>iasgjsdoifgasoifhw</td>
                                                        <td>Books</td>
                                                        <td>
                                                            <a class=""><i class="fa fa-edit"></i>Update</a>
                                                            <a class=""><i class="fa fa-remove"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Garrett</td>
                                                        <td>Accountant</td>
                                                        <td>Gamilc.com</td>
                                                        <td>gaikasgsdij</td>
                                                        <td>2011/07/25</td>
                                                        <td>gauikasfiweeos</td>
                                                        <td>Books</td>
                                                        <td>
                                                            <a class=""><i class="fa fa-edit"></i>Update</a>
                                                            <a class=""><i class="fa fa-remove"></i>Delete</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End page content -->

    </div>
    </div>



    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- gauge.js -->
    <script src="{{ asset('assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Skycons -->
    <script src="{{ asset('assets/vendors/skycons/skycons.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('assets/vendors/DateJS/build/date.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets/build/js/custom.min.js') }}"></script>

</body>

</html>
