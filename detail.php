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
    <title>PPI Edufest | Writing Contest</title>

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
                aria-label="Toggle navigation"
              >
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
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Content Area Start ***** -->
    <?php
    include "config/connection.php";
    $id = $_REQUEST['id'];
    $today = date("Y-m-d");
    $sql = "SELECT * FROM event WHERE id_event=$id";
    $query = mysqli_query($conn, $sql);
    $sql2 = "SELECT*FROM speaker WHERE id_event=$id";
    $query2 = mysqli_query($conn, $sql2);
    $data = mysqli_fetch_assoc($query);
    $count = mysqli_num_rows($query2);
    $i = 1;
    $date = date_create($data['tanggal_event']);
    $opreg = $date;
    date_sub($date,date_interval_create_from_date_string("1 days"));
    $date = date_format($date,"Y-m-d");
    date_sub($opreg,date_interval_create_from_date_string("7 days"));

    ?>
    <div class="container-fluid mt-content">
      <div class="row">
          <div class="col-sm-6 px-5">
            <div class="">
              <h1 class="mb-2 text-center"><?php echo $data['judul_event']; ?></h1>
              <div class='row d-flex align-items-center justify-content-center'>
          <?php while($loop = mysqli_fetch_assoc($query2)){ ?>
                    <div class="col-md-4 text-center">
                        <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s" style="min-height:350px;">
                            <br><img src="img/uploads/speaker/<?php echo $loop['img_speaker']; ?>" alt="" style="height:150px;width:150px;">
                            <div class="blog-content text-dark">
                                <h4><small><?php echo $loop['nama_speaker']; ?></small></h4>
                                <p><?php echo $loop['lingkup_jurusan']; ?><br>
                                <p><?php echo $loop['tentang_speaker']; ?></p>
                            </div>
                        </div>
                      </div>
                <!-- </div> -->
          <?php } if ($count == 0) { ?>
            <!-- <div class='row d-flex align-items-center justify-content-center'> -->
              <?php for($c=0; $c < 3; $c++) { ?>
              <div class="col-md-4 text-center">
                  <div class="single-blog-area wow fadeInUp" data-wow-delay="0.5s" style="min-height:515px;">
                      <br><img src="img/comingsoon/SPEAKER.jpg" alt="" style="height:150px;width:150px;">
                      <div class="blog-content text-dark">
                          <h4><small>Coming Soon</small></h4>
                      </div>
                  </div>
              </div>
            <?php } ?>
            <!-- </div> -->
          <?php } ?>
              </div>
            </div>
              <h4><b>Waktu Pelaksanaan: <?php echo $data['tanggal_event']; ?></b></h4>
              <p><?php echo $data['detail_event']; ?></p>
              <p><b>Penutupan Pendaftaran: <?php echo $data['tanggal_event']; ?>, 1 jam sebelum acara dimulai</b></p>
            </div>

          <!-- /.col-sm-6 -->
          <div class="col-sm-6">
            <iframe id="gform" src='<?php echo $data['link_daftar_event']; ?>' width="100%" height="2430px" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>

            <!-- redirect to telegram channel -->
            <script type="text/javascript">
            var load = 0;

            document.getElementById('gform').onload = function(){
              /*Execute on every reload on iFrame*/
              load++;
              if(load > 1){
                /*Second reload is a submit*/
              document.getElementById("gform").style.height = "100%";
              window.open("https://t.me/joinchat/6fn52_-GVrI3MDE1", "_blank");
              }
            }
          </script>
          </div>
        </div>
        </div>
        <!-- /.row -->
       <!-- </div> -->
       <!-- /.container -->

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
<style>
  .single-blog-area {
    padding: 0px;
    margin-bottom: 10px;
  }


  .blog-content {
    padding: 5px;
    text-align: center;
  }
</style>
