<html>
    <head>
        <?php include "asset/css/sources.php"; ?>
        <link rel="stylesheet" href="asset/css/tables.css">
        <link rel="stylesheet" href="asset/css/main.css">
        <h1 style="text-align:center; color:white;"><i class="fa fa-university"></i> PPI EDUFEST <i class="fa fa-university"></i></h1>
        <hr>

    </head>

    <body class="container">
        <div class="snowflakes" aria-hidden="true">
            <?php for($i=0; $i<100; $i++){ ?>
                <div class="snowflake">❅</div>
            <?php } ?>
        </div>
        <a href='tables/absen.php'><button type="button" class="btn btn-lg btn-block btn-info">Absen <i class="fa fa-users"></i></button></a>
        <a href='tables/event.php'><button type="button" class="btn btn-lg btn-block btn-info">Events <i class="fa fa-calendar"></i>  </button></a>
        <a href='tables/faq.php'><button type="button" class="btn btn-lg btn-block btn-info">FAQ <i class="fa fa-question-circle"></i></button></a>
        <a href='tables/speaker.php'><button type="button" class="btn btn-lg btn-block btn-info">Speaker <i class="fa fa-bullhorn"></i></button></a>
        <a href='tables/statistics.php'><button type="button" class="btn btn-lg btn-block btn-info">Statistics <i class="fa fa-bar-chart"></i></button></a>
    </body>
</html>
