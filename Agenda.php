<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>PPI Edufest | Agenda</title>

     <link rel="icon" href="favicon-32x32.png"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet" />
    <link href="multiitemslider.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="loader">
            <span class="inner1"></span>
            <span class="inner2"></span>
            <span class="inner3"></span>
        </div>
    </div>

    <!-- ***** Header Area Start ***** -->
     <header class="header_area" id="header">
      <div class="container-fluid h-100">
        <div class="row h-100">
          <div class="col-12 h-100">
            <nav class="h-100 navbar navbar-expand-lg align-items-center">
              <a class="navbar-brand" href="index.php"
                ><img src="img/logo-edufest.png" width="150" alt=""
              /></a>
              <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#fancyNav"
                aria-controls="fancyNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="ti-menu"></span>
              </button>

              <!-- TODO add hover animation bottom line -->
              <div class="collapse navbar-collapse" id="fancyNav">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="index.php"> Beranda </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="pembicara.php">Pembicara</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="Agenda.php">Agenda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="writing.php">Writing Contest</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="dokumentasi.php">Dokumentasi</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- ***** Header Area End ***** -->

    <!-- ***** Trending Topic Start ***** -->
 <section class="fancy-about-us-area bg-gray">
        <div class="container">


            <div class="container-fluid bg-1 text-center mb-5">
              <img
                class=""
                src="img/celebrate.png"
                alt="celebrate"
                id="banner"
                width="500"
              />
              <h1 id="headline" class="margin font-weight-bold">
               Agenda
              </h1>
            </div>

            <!--<div class="row d-flex align-items-center justify-content-center">-->
                <!--Agenda -->

            <?php
            include "config/connection.php";
            $today = date("Y-m-d");
            $sql = "SELECT*FROM event ORDER BY tanggal_event";
            $query = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($query);
            $i = 1;
            if($count > 0){
              if($count != 4){ echo "<div class='row d-flex align-items-center justify-content-center'>"; }
              while($data = mysqli_fetch_assoc($query)){
                $opreg = date_create($data['tanggal_event']);
                date_sub($opreg,date_interval_create_from_date_string("9 days"));
                $opreg = date_format($opreg,"Y-m-d");
                if(($count == 4 && $i == 1) || ($count == 4 && $i == 3)){ echo "<div class='row d-flex align-items-center justify-content-center'>"; }

                // $month = date("m",strtotime($data['tanggal_event']));
                if ($data['tanggal_event'] < $today){
                ?>
                  <div class="col-12 col-md-4 text-center">
                      <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                          <br><img src="img/uploads/event/<?php echo $data['img_event']; ?>" alt="" style="height:280px;width:280px;">
                          <div class="blog-content">
                              <br><h3><a href="#"><?php echo $data['judul_event']; ?></a></h3>
                              <br><p><strong>Tanggal Pelaksanaan: <?php echo $data['tanggal_event'];  ?></strong></p>
                              <!-- <br><a href="detail.php?id=<?php echo $data['id_event']; ?>"><button type="button" class="btn btn-danger">Daftar Sekarang</button></a> -->
                              <br><button type="button" style="border-radius: 40px; color: white; font-size: 12px;" class="btn btn-success" disabled>Terlaksana</button>
                          </div>
                      </div>
                  </div>
                <?php } else if(($today >= $opreg) AND ($today <= $data['tanggal_event'])) {?>
                  <div class="col-12 col-md-4 text-center">
                      <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                          <br><img src="img/uploads/event/<?php echo $data['img_event']; ?>" alt="" style="height:280px;width:280px;">
                          <div class="blog-content">
                              <br><h3><a href="#"><?php echo $data['judul_event']; ?></a></h3>
                              <br><p><strong>Tanggal Pelaksanaan: <?php echo $data['tanggal_event'];  ?></strong></p>
                               <br><a href="detail.php?id=<?php echo $data['id_event']; ?>"><button type="button" class="btn btn-danger">Daftar Sekarang</button></a>
                              <!--<br><button type="button" style="border-radius: 40px; font-size: 12px;" class="btn btn-info" disabled>Pendaftaran Belum Dibuka</button>-->
                              <!-- <br><button type="button" style="border-radius: 40px; font-size: 12px;" class="btn btn-warning" disabled><b>Pendaftaran Telah Ditutup</b></button> -->
                          </div>
                      </div>
                  </div>
                <?php } else { ?>
                  <div class="col-12 col-md-4 text-center">
                      <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                          <br><img src="img/uploads/event/<?php echo $data['img_event']; ?>" alt="" style="height:280px;width:280px;">
                          <div class="blog-content">
                              <br><h3><a href="#"><?php echo $data['judul_event']; ?></a></h3>
                              <br><p><strong>Tanggal Pelaksanaan: <?php echo $data['tanggal_event'];  ?></strong></p>
                              <!-- <br><a href="detail.php?id=<?php echo $data['id_event']; ?>"><button type="button" style="font-size: 12px;" class="btn btn-danger">Daftar Sekarang</button></a> -->
                              <!-- <br><a href="#"><button type="button" class="btn btn-danger" disabled>Daftar Sekarang</button></a> -->
                              <br><button type="button" style="border-radius: 40px; font-size: 12px;" class="btn btn-info" disabled>Pendaftaran Belum Dibuka</button>
                          </div>
                      </div>
                  </div>

            <?php   }
              if(($count == 4 && $i == 2) || ($count == 4 && $i == 4)){ echo "</div>"; }
              $i++;
              }
              if($count != 4){ echo "</div>"; }
            } else {
            ?>
                <div class="col-12 col-md-4 text-center">
                      <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                          <br><img src="img/comingsoon/poster1.jpg" alt="" style="height:200px;width:200px;">
                          <div class="blog-content">
                            <br><h4>Coming Soon!</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-4 text-center">
                      <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <br><img src="img/comingsoon/festival.jpeg" alt="" style="height:200px;width:200px;">
                          <div class="blog-content">
                            <br><h4>Coming Soon!</h4>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-4 text-center">
                      <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                        <br><img src="img/comingsoon/luarnegeri.jpeg" alt="" style="height:200px;width:200px;">
                          <div class="blog-content">
                              <br><h4>Coming Soon!</h4>
                          </div>
                      </div>
                  </div>
            <?php } ?>
            <!-- </div> -->
        </div>
    </section>
    <!-- ***** Trending Topic End ***** -->

    <!-- ***** Footer & Sponsor Area Start ***** -->
    <?php include_once "footer.php"; ?>
      <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body>

</html>
