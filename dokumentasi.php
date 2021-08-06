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
    <title>PPI Edufest | Dokumentasi</title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@100;200;300;400;700&family=Roboto:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

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
                    <a class="nav-link" href="faq.php">Dokumentasi</a>
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
        Dokumentasi <br />
        Materi
      </h1>
    </div>
    <!-- First Container End -->

    <!-- Photo Section Start -->
    <!-- TODO add guest name animation hover -->
    <div class="col-12">
      <div class="card text-center">
        <div class="card-header">
          Drive Dokumentasi Materi Narasumber PPI Edufest
        </div>
        <div class="card-body">
          <h5 class="card-title">Silahkan Download File yang Dituju Dibawah ini</h5>
          <iframe id="driveFrame" width="100%" height="600px" class="drive-frame" src="https://googledriveembedder.collegefam.com/?key=AIzaSyAW730mQwTrCsypb9vYL4Bp-bRlz8kdzVs&folderid=0BxFHDQFhm0ZvfmIxQng0ZXdNWXNRQlozWFVhd2Z0eXUtM1pZcUZyRzY2SWxtZzVnYjdINWc"></iframe>

        </div>
        <div class="card-footer text-muted">
          Kolaborasi Insiprasi Untuk Negeri
        </div>
      </div>
    </div>
    <!-- Photo Section End -->

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
