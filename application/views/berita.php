<!DOCTYPE html>
<html lang="en">

<head>
    <title>Berita - Lembaga Eksekutif Mahasiswa Fakultas Psikologi Dan Ilmu Sosial Budaya UII</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/logo/favicon.jpg">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="description" content="Daftar Berita & Info Terbaru Situs Resmi Lembaga Eksekutif Mahasiswa Fakultas Psikologi Dan Ilmu Sosial Budaya Universitas Islam Indonesia #thinksmart #workhard." />
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
                        <h3 class="title">Daftar Berita</h3>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                        <?php if(!empty($record)):?>
									<?php foreach($record as $row): ?>
                        <div id="article">
                        <a href="<?php echo base_url()?>artikel/<?php echo $row['slug']?>"><h4><?php echo $row['judul'];?></h4></a>
                        <p><?php echo strip_tags(substr($row['konten'],0,50)); ?> […]</p>
                         <p class="small pull-left" ><span class="fa fa-calendar"></span> <?php echo date('d M Y', strtotime($row['created_at'])); ?></p><p class="small" >&nbsp;&nbsp;&nbsp;<span class="fa fa-clock-o"></span> <?php echo date('H:i', strtotime($row['created_at'])); ?> </p>
                        <hr/>
                        </div>
                        <?php endforeach;?>
								<?php endif;?>
                        </div>
                        <ul class="pagination pagination-primary">
                    <?php echo $pagination ;?>
                </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
