<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>PPI Edufest | Pembicara</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet" />
  </head>

  <body>
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

    <!-- ***** Content Area Start ***** -->
    <div class="container-fluid"></div>
    <!-- First Container Start -->
    <div class="container-fluid bg-1 text-center mb-5">
      <img
        class=""
        src="img/celebrate.png"
        alt="celebrate"
        id="banner"
        width="500"
      />
      <h1 id="headline" class="margin font-weight-bold">
        Bintang Tamu <br />
        Special
      </h1>
    </div>
    <!-- First Container End -->

    <!-- Photo Section Start -->
    <!-- TODO add guest name animation hover -->
    <div class="grid-container containter-fluid mb-5 galery">
      <div class="left">
        <img
          src="img/comingsoon/ProfAS.jpeg"
          width=""
          alt=""
          class=""
        />
      </div>
      <div class="right-top">
        <img
          src="img/comingsoon/ProfSA.jpeg"
          alt=""
          class=""
        />
      </div>
      <div class="left-bottom">
        <img
          src="img/comingsoon/koor_PPI.jpg"
          alt=""
          class=""
        />
      </div>
      <div class="left-middle">
        <img
          src="img/comingsoon/ketu.jpg"
          alt=""
          class=""
        />
      </div>
      <div class="right-bottom">
        <img
          src="img/comingsoon/singer.jpg"
          alt=""
          class=""
        />
      </div>
      <div class="right-middle">
        <img
          src="img/comingsoon/schoter.png"
          alt=""
          class=""
        />
      </div>
    </div>
    <!-- Photo Section End -->

    <!-- Delegation Start -->
    <div class="container-fluid bg-1 text-center mb-5">
      <h1 class="margin font-weight-bold">Delegasi PPI Negara</h1>
    </div>

    <div class="p-5">
      <div class="container-fluid">
        <div class='row d-flex align-items-center justify-content-center'>
        <?php
        include "config/connection.php";
        $sql = "SELECT*FROM speaker";
        $query = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($query);
        $i = 1;
        if($count > 0){
          while($data = mysqli_fetch_assoc($query)){
              //sql
              $id = $data['id_speaker'];
              $id_event = $data['id_event'];
              $asal_speaker = $data['asal_speaker'];
              $ppi = $data['ppi_speaker'];
              $jurusan = $data['lingkup_jurusan'];
              $sql_event = "SELECT*FROM event WHERE id_event = $id_event";
              $query_event = mysqli_query($conn, $sql_event);
              $data_event = mysqli_fetch_assoc($query_event);
              if(empty($asal_speaker)){
                  $prov = "";
              } else {
                  $sql_prov = "SELECT*FROM provinsi WHERE id_provinsi=$asal_speaker";
                  $query_prov = mysqli_query($conn, $sql_prov);
                  $data_prov = mysqli_fetch_assoc($query_prov);
                  $prov = $data_prov['provinsi'];
              }
              if(empty($data['tentang_speaker'])){
                  $note = "";
              } else {
                  $note = $data['tentang_speaker'];
              }
              //application
              // if(($count == 4 && $i == 1) || ($count == 4 && $i == 3)){ echo "<div class='row d-flex align-items-center justify-content-center'>"; }
            ?>
              <div class="col-12 col-md-3 text-center">
                <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s" style="min-height:486px;">
                    <br><img src="img/uploads/speaker/<?php echo $data['img_speaker']; ?>" alt="" style="height:200px;width:200px;" class="mb-2" loading="lazy">
                    <div class='blog-content'>
                      <span><?php echo $data['nama_speaker']; ?></span>
                      <p class='text-secondary'><?php echo $ppi; ?></p>
                      <p class='text-secondary'><?php echo $jurusan; ?></p>
                      <p class='text-secondary'><?php echo $note; ?></p>
                    </div>
                </div>
              </div>
        <?php
            // if(($count == 4 && $i == 2) || ($count == 4 && $i == 4)){ echo "</div>"; }
            $i++;
          }
        } else {
        ?>
          <div class="col-12 col-md-4 text-center">
            <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
                <br><img src="img/comingsoon/speaker.jpg" alt="" style="height:200px;width:200px;" class="mb-2" loading="lazy">
                <div class='blog-content'>
                  <br><span>Coming Soon!</span>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-4 text-center">
            <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
              <br><img src="img/comingsoon/speaker.jpg" alt="" style="height:200px;width:200px;" class="mb-2" loading="lazy">
                <div class='blog-content'>
                  <br><span>Coming Soon!</span>
                </div>
            </div>
          </div>
          <div class="col-12 col-md-4 text-center">
            <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s">
              <br><img src="img/comingsoon/speaker.jpg" alt="" style="height:200px;width:200px;" class="mb-2" loading="lazy">
                <div class='blog-content'>
                  <br><span>Coming Soon!</span>
                </div>
            </div>
          </div>
      <?php } ?>
      </div>
      </div>
      <!-- /.container -->
    </div>

    <!-- Delegation End -->

    <!-- ***** Content Area End ***** -->

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
