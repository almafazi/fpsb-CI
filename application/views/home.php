<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lembaga Eksekutif Mahasiswa Fakultas Psikologi Dan Ilmu Sosial Budaya UII</title>
    <link rel="shortcut icon" href="images/logo/favicon.jpg">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="Situs Resmi Lembaga Eksekutif Mahasiswa Fakultas Psikologi Dan Ilmu Sosial Budaya Universitas Islam Indonesia #thinksmart #workhard." />
    <meta name="author" content="LEM FPSB UII"/>
    <meta content="document" name="resource-type"/>
    <meta content="all" name="audience"/>
    <meta name="googlebot" content="index,follow"/>
    <meta name="spiders" content="index,follow" />
    <meta name="robots" content="index,follow" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-kit.css?v=2.0.2">
    <link href="<?php echo base_url(); ?>assets/assets-for-demo/demo.css" rel="stylesheet" />
</head>

<body class="landing-page ">
    <nav class="navbar navbar-color-on-scroll navbar-transparent    fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <img src="<?php echo base_url(); ?>assets/img/kit/lem1.png" width="170px" height="40px" alt="">
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>" class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                             Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>visi_misi" class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                             Visi & Misi
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>profil" class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                             Profil LEM FPSB
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>logo" class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                             Logo LEM FPSB
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>pengurus" class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                             Profil Pengurus
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>berita" class="nav-link">
                             Berita
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>informasi" class="nav-link" href="javascript:void(0)" onclick="scrollToDownload()">
                             Informasi dan kotak Saran
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter" data-parallax="true" style=" background-image: url('assets/img/kit/fpsb.jpg'); ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Eksekutif Progresif</h1>
                    <h4>Situs Resmi Lembaga Eksekutif Mahasiswa Fakultas Psikologi Dan Ilmu Sosial Budaya Universitas Islam Indonesia #thinksmart #workhard.</h4>
                    <br>
                    <a href="<?php echo base_url(); ?>visi_misi" target="_blank" class="btn btn-danger btn-raised btn-lg">
                        <i></i> Visi dan Misi
                    </a>
                    <a href="<?php echo base_url(); ?>profil" target="_blank" class="btn btn-danger btn-raised btn-lg">
                        <i></i> Profil Lembaga
                    </a>

                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div class="section text-center">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto">
                        <h2 class="title">Visi dan Misi</h2>
                    </div>
                </div>
                <div class="features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">brightness_low</i>
                                </div>
                                <h4 class="info-title"><?php echo strip_tags($grand_theme->judul); ?></h4>
                                <p><?php echo strip_tags($grand_theme->konten); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">stars</i>
                                </div>
                                <h4 class="info-title"><?php echo strip_tags($visi->judul); ?></h4>
                                <p><?php echo strip_tags($visi->konten); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">settings_overscan</i>
                                </div>
                                <h4 class="info-title"><?php echo strip_tags($misi->judul); ?></h4>
                                <p><?php echo strip_tags($misi->konten); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Our Team</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2 col-6 p-1" style="margin-left:260px">
                        <a href="<?php echo base_url(); ?>#">
          <img class="" width="220px" height="220px" src="<?php echo base_url(); ?>images/ketua.png"  style="padding:20px"> </a>
                    </div>
                    <div class="col-md-2 col-6 p-1">
                        <a href="<?php echo base_url(); ?>#">
          <img class="" width="220px" height="220px" src="<?php echo base_url(); ?>images/sekre.png"  style="padding:20px"> </a>
                    </div>
                    <div class="col-md-2 col-6 p-1">
                        <a href="<?php echo base_url(); ?>#">
          <img class="" width="220px" height="220px" src="<?php echo base_url(); ?>images/bendahara.png"  style="padding:20px"> </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-2 col-6 p-1" style="margin-left:70px">
                        <a href="<?php echo base_url(); ?>#">
          <img class="" width="220px" height="220px" src="<?php echo base_url(); ?>images/jarmedin.png"  style="padding:20px"> </a>
                    </div>
                    <div class="col-md-2 col-6 p-1">
                        <a href="<?php echo base_url(); ?>#">
          <img class="" width="220px" height="220px" src="<?php echo base_url(); ?>images/po.png"  style="padding:20px"> </a>
                    </div>
                    <div class="col-md-2 col-6 p-1">
                        <a href="<?php echo base_url(); ?>#">
          <img class="" width="220px" height="220px" src="<?php echo base_url(); ?>images/pmb.png"  style="padding:20px"> </a>
                    </div>
                    <div class="col-md-2 col-6 p-1">
                        <a href="<?php echo base_url(); ?>#">
          <img class="" width="220px" height="220px" src="<?php echo base_url(); ?>images/sosling.png"  style="padding:20px"> </a>
                    </div>
                    <div class="col-md-2 col-6 p-1">
                        <a href="<?php echo base_url(); ?>#">
          <img class="" width="220px" height="220px" src="<?php echo base_url(); ?>images/kd.png"  style="padding:20px"> </a>
                    </div>

                </div>
            </div>

        <div class="container">
          <div class="section section-contacts">
           <div class="row">
                     <div class="col-md-12 text-center">
                        <h2 class="title">Berita</h2>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                <?php foreach($posts as $post): ?>
                <div id="article">
                <a href="<?php echo base_url().'artikel/'.$post->slug; ?>"><h4><?php echo $post->judul; ?></h4></a>
                <p><?php echo strip_tags(substr($post->konten,0,50)); ?> […]</p>
                 <p class="small pull-left" ><span class="fa fa-calendar"></span> <?php echo date('d M Y', strtotime($post->created_at)); ?></p><p class="small" >&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span> <?php echo date('H:i', strtotime($post->created_at)); ?> </p>
                <hr/>
                </div>
                <?php endforeach; ?>
                </div>
            </div>
            <div class="row">
                     <div class="col-md-12 text-center">
            <a href="berita" class="btn btn-danger" > Berita Selengkapnya</a>
                </div>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center title">Kotak Saran</h2>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Your Name</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Your Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleMessage" class="bmd-label-floating">Your Message</label>
                            <textarea type="email" class="form-control" rows="4" id="exampleMessage"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto text-center">
                                <button class="btn btn-danger btn-raised">
                                        Send Message
                                    </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div></div>
    <footer class="footer ">
        <div class="container">
            <div class="copyright pull-center">
                &copy;
                <script>
                    document.write(new Date().getFullYear())

                </script>, made with <i class="material-icons">favorite</i> by
                <a href="<?php echo base_url(); ?>" target="_blank">Codenesia</a> for a better web.
            </div>
        </div>
    </footer>
    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-material-design.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/nouislider.min.js"></script>
    <!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
    <script src="<?php echo base_url(); ?>assets/js/material-kit.js?v=2.0.2"></script>
    <!-- Fixed Sidebar Nav - js With initialisations For Demo Purpose, Don't Include it in your project -->
    <script src="<?php echo base_url(); ?>assets/assets-for-demo/js/material-kit-demo.js"></script>
</body>

</html>
