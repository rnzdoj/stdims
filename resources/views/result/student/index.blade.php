@extends('layouts.student')
@section('content')

<body id="page-top">
    <div></div>
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="icon ion-ios-book"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Student IMS</span></div>
                </a>
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="student-show.html"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="student-attendance.html"><i class="fas fa-table"></i><span>Attendance</span></a><a class="nav-link" href="statement-index.html"><i class="fas fa-table"></i><span>Statement</span></a><a class="nav-link active"
                            href="student-result.html"><i class="fas fa-table"></i><span>Result</span></a><a class="nav-link" href="join-class-create.html"><i class="fas fa-plus"></i><span>Join Class</span></a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav flex-nowrap ml-auto border-0">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Dorji Nima</span></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"
                                        role="menu"><a class="dropdown-item" role="presentation" href="student-show.html"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                                </div>
                            </li>
                        </ul><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button></div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Result</h3><a class="bg-light" href="#"></a></div>
                </div>
                <div class="container-fluid">
                    <div class="card shadow"></div>
                </div>
                <div class="container">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Year</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12</td>
                                    <td>2012</td>
                                    <td><a href="student-result-viewcom.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>2011</td>
                                    <td><a href="student-result-viewcom.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>2010</td>
                                    <td><a href="student-result-view2.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>2009</td>
                                    <td><a href="student-result-view2.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>2008</td>
                                    <td><a href="student-result-view1.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>2007</td>
                                    <td><a href="student-result-view1.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>2006</td>
                                    <td><a href="student-result-view.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>2005</td>
                                    <td><a href="student-result-view.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>2004</td>
                                    <td><a href="student-result-view.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>2003</td>
                                    <td><a href="student-result-view.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2001</td>
                                    <td><a href="student-result-view.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2001</td>
                                    <td><a href="student-result-view.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr>
                                    <td>PP</td>
                                    <td>2000</td>
                                    <td><a href="student-result-view.html"><i class="fa fa-eye"></i></a></td>
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card"></div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
@endsection
</html>