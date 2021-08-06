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
    <title>PPI Edufest | FAQ</title>

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
    <!-- First Container Start -->
    <div class="container-fluid bg-1 text-center mb-5">
      <img
        class=""
        src="img/celebrate.png"
        alt="celebrate"
        id="banner"
        width="600"
      />
      <h1 id="headline" class="margin font-weight-bold">FAQ</h1>
    </div>

    <!-- FAQ LIST Start -->
    <section
      class="accordion-section clearfix margin-up"
      aria-label="Question Accordions"
    >
      <div class="container">

        <div
          class="panel-group"
          id="accordion"
          role="tablist"
          aria-multiselectable="true"
        >
        <?php
        include "config/connection.php";
        $sql = "SELECT*FROM faq";
        $query = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($query);
        if($count > 0){
            while ($data = mysqli_fetch_assoc($query)){
            ?>
            <div class="panel panel-default">
                <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
                  <h3 class="panel-title">
                    <a
                      class="collapsed"
                      role="button"
                      title=""
                      data-toggle="collapse"
                      data-parent="#accordion"
                      href="#collapse<?php echo $data['id_faq']; ?>"
                      aria-expanded="true"
                      aria-controls="collapse0"
                    >
                      <?php echo $data['question_faq']; ?>
                    </a>
                  </h3>
                </div>
                <div
                  id="collapse<?php echo $data['id_faq']; ?>"
                  class="panel-collapse collapse"
                  role="tabpanel"
                  aria-labelledby="heading0"
                >
                  <div class="panel-body px-3 mb-4">
                    <ul>
                      <li>
                          <?php echo $data['answer_faq']; ?>
                      </li>
                    </ul>
                  </div>
                </div>
            </div>
      <?php
            }
        } else {
          echo "<br><br><h4 class='text-center'>Data Belum Tersedia...</h4><br><br>";
        }
      ?>
      </div>
    </section>
    <!-- FAQ LIST End -->
    <!-- First Container End -->

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
