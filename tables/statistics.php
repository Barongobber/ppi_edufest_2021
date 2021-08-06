<?php 
    include "../config/connection.php"; 
    include "../asset/css/sources.php"; 
    $sql = "SELECT*FROM wilayah LEFT JOIN event ON wilayah.id_wilayah = event.wilayah_event ORDER BY wilayah.id_wilayah ASC";
    $query = mysqli_query($conn, $sql); 
?>

<html>
    <head>
        <link rel="stylesheet" href="../asset/css/tables.css">
        <h1 style="text-align:center; color:white;"><i class="fa fa-users"></i> STATISTICS <i class="fa fa-bar-chart"></i></h1>
        <hr>
    </head>
    <body class="container">
        <table>
            <thead>
                <tr class="none">
                    <td><a href='../main.php'><i class="fa fa-chevron-left"></i> Main Menu</a></td>
                </tr>
            </thead>
            <tr>
                <th>ID Wilayah</th>
                <th>Nama Wilayah</th>
                <th>Event Name</th>
                <th>Jumlah Peserta</th>
                <th>Jumlah Speaker</th>
            </tr>
        <?php 
        while($data = mysqli_fetch_assoc($query)){ 
            $idw = $data['id_wilayah'];
            if(empty($data['id_event'])){
                $countp=0; 
                $counts=0; 
            } else {
                $id = $data['id_event']; 
                $sqlp = "SELECT*FROM absen LEFT JOIN provinsi ON absen.domisili_peserta = provinsi.id_provinsi LEFT JOIN wilayah ON provinsi.id_wilayah = wilayah.id_wilayah WHERE absen.id_absen_event=$id"; 
                $queryp = mysqli_query($conn,$sqlp); 
                $countp = mysqli_num_rows($queryp);
                $sqls = "SELECT*FROM speaker WHERE id_event=$id"; 
                $querys = mysqli_query($conn,$sqls); 
                $counts = mysqli_num_rows($querys);
            }
        ?>
            <tr>
                <td><?php echo $idw; ?></td>
                <td><?php echo $data['nama_wilayah']; ?></td>
                <td><?php echo $data['judul_event']; ?></td>
                <td><?php echo $countp; ?></td>
                <td><?php echo $counts; ?></td>
            </tr>
        <?php } ?>
        </table>
    </body>
</html>