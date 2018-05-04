<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $data->judul; ?> - LEM FPSB UII</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/logo/favicon.jpg">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <meta name="description" content="<?php echo substr(strip_tags($data->konten),0,190); ?>" />
    <meta name="author" content="LEM FPSB UII"/>
    <meta content="document" name="resource-type"/>
    <meta content="all" name="audience"/>
    <meta name="googlebot" content="index,follow"/>
    <meta name="spiders" content="index,follow" />
    <meta name="robots" content="index,follow" />
    <!-- Favicons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-kit.css?v=2.0.2">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo base_url(); ?>assets/assets-for-demo/demo.css" rel="stylesheet" />
    <!-- iframe removal -->
    <style type="text/css">
        .left {
            text-align: left;
        }

        .right {
            text-align: right;
        }

        .center {
            text-align: center;
        }

        .justify {
            text-align: justify;
        }

    </style>

</head>

<body class="landing-page ">
    <nav class="navbar fixed-top  navbar-expand-lg " color-on-scroll="100" id="sectionsNav">
        <div class="container">
            <div class="navbar-translate">
                <!-- <a class="navbar-brand" href="index">Material Kit </a> -->
                <img src="<?php echo base_url(); ?>assets/img/kit/lem.png" width="170px" height="60px" alt="">
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

    <div class="main main-raised post-page">
        <div class="container">
            <div class="section">
                <div class="row">
                    <div class="col-md-12 ml-auto mr-auto">
                        <h3 class="title"><?php echo $data->judul; ?></h3>
                    </div>
                    <div class="col-md-12 ml-auto mr-auto">
                        <small class="posted-on"><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($data->created_at)); ?></small>&nbsp;&nbsp;&nbsp;<small class="posted-on"><i class="fa fa-clock-o"></i> <?php echo date('H:i', strtotime($data->created_at)); ?></small>&nbsp;&nbsp;&nbsp;<small class="updated-on"><i class="fa fa-refresh"></i> <?php echo date('d M Y, H:i', strtotime($data->updated_at)); ?></small>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-12 ml-auto mr-auto">
                        <div class="py-5">
                                <article class="left">
                                            <?php echo $data->konten; ?>
                                </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
