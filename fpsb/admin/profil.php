<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Sistem Rekomendasi Tempat Wisata</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="" class="simple-text">
                Rekomendasi Wisata
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="visi.php">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Visi & Misi</p>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="profil.php">
                    <i class="nc-icon nc-notes"></i>
                    <p>Profil Lem FPSB</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="logo.php">
                    <i class="nc-icon nc-notes"></i>
                    <p>Logo LEM FPSB</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="pengurus.php">
                    <i class="nc-icon nc-notes"></i>
                    <p>Profil Pengurus</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="informasi.php">
                    <i class="nc-icon nc-notes"></i>
                    <p>informasi</p>
                </a>
            </li>

        </ul>
    </div>

        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <a class="navbar-brand" href="#pablo"> User </a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Minat</h4>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Lokasi</label><br>
                                                    <select class="custom-select">
                                                      <option selected></option>
                                                      <option value="1">Kabupaten Bantul</option>
                                                      <option value="2">Kabupaten Gunungkidul</option>
                                                      <option value="3">Kabupaten Kulon Progo</option>
                                                      <option value="4">Kabupaten Kulon Sleman</option>
                                                      <option value="5">Kota Yogyakarta</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Jenis Makanan</label> <br>
                                                    <select class="custom-select">
                                                      <option selected></option>
                                                      <option value="1">Daging</option>
                                                      <option value="2">Buah-buahan</option>
                                                      <option value="3">Kacang-kacangan</option>
                                                      <option value="4">Sayur-Sayuran</option>
                                                      <option value="5"></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Hobi</label> <br>
                                                    <select class="custom-select">
                                                      <option selected></option>
                                                      <option value="1">Hiking</option>
                                                      <option value="2">Snorkling</option>
                                                      <option value="3">Camping</option>
                                                      <option value="4">Swiming</option>
                                                      <option value="5"></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Budget</label> <br>
                                                    <select class="custom-select">
                                                      <option selected></option>
                                                      <option value="1">100.000</option>
                                                      <option value="2">300.000</option>
                                                      <option value="3">500.000</option>
                                                      <option value="4">700.000</option>
                                                      <option value="5">1.000.000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

</html>
