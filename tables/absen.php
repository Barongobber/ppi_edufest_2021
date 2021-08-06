<?php 
    include "../config/connection.php"; 
    include "../asset/css/sources.php"; 
    $sql = "SELECT * FROM absen LEFT JOIN event ON absen.id_absen_event=event.id_event LEFT JOIN provinsi ON absen.domisili_peserta=provinsi.id_provinsi LEFT JOIN wilayah ON provinsi.id_wilayah=wilayah.id_wilayah"; 
    $query = mysqli_query($conn, $sql);

    //activate only when you need to delete all users from an event 
    //$idae = 2; //id_absen_event = id event 
    //$sql_del = "DELETE FROM absen WHERE id_absen_event=$idae"; 
    //$query_del = mysqli_query($conn, $sql_del); 
?>

<html>
    <head>
        <link rel="stylesheet" href="../asset/css/tables.css">
        <h1 style="text-align:center; color:white;"><i class="fa fa-users"></i> ABSENSI PESERTA <i class="fa fa-users"></i></h1>
        <hr>
    </head>
    <body class="container">
        <table>
            <thead>
                <tr class="none">
                    <td><a href='../main.php'><i class="fa fa-chevron-left"></i> Main Menu</a></td>
                    <td colspan="4"></td>
                    <td><a href='../add/add_absen.php'>Tambah Peserta <i class="fa fa-plus"></i></a></td>
                </tr>
            </thead>
            <tr>
                <th>Event</th>
                <th>Nama</th>
                <th>Domisili</th>
                <th>Wilayah</th>
                <th>Email</th>
                <th>Nomor HP</th>
            </tr>
            <?php 
                while ($data = mysqli_fetch_assoc($query)){
                    
                    echo "<tr>"; 
                    echo "<td>".$data['judul_event']."</td>";
                    echo "<td>".$data['nama_peserta']."</td>";
                    echo "<td>".$data['provinsi']."</td>";
                    echo "<td>".$data['nama_wilayah']."</td>"; 
                    echo "<td>".$data['email_peserta']."</td>";
                    echo "<td>".$data['hp_peserta']."</td>";
                    echo "</tr>"; 
                }
            ?>
        </table>
    </body>
</html>