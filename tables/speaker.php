<?php 
    include "../config/connection.php"; 
    include "../asset/css/sources.php"; 
    $sql = "SELECT*FROM speaker"; 
    $query = mysqli_query($conn, $sql);
?>

<html>
    <head>  
        <link rel="stylesheet" href="../asset/css/tables.css">
        <h1><i class="fa fa-bullhorn"></i> SPEAKERS <i class="fa fa-bullhorn"></i></h1>
        <hr>
    </head>
    <body class="container">
        <table>
            <thead>
                <tr class="none">
                    <td><a href='../main.php'><i class="fa fa-chevron-left"></i> Main Menu</a></td>
                    <td colspan="9"></td>
                    <td><a href='../add/add_speaker.php'>Tambah Speaker <i class="fa fa-plus"></i></a></td>
                </tr>
                </thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Gambar</th>
                <th>PPI Speaker</th>
                <th>Lingkup Jurusan</th>
                <th>Tentang Speaker</th>
                <th>Event</th>
                <th>Asal</th>
                <th>Actions</th>
            </tr>
            <?php 
                while ($data = mysqli_fetch_assoc($query)){
                    $id = $data['id_speaker']; 
                    $id_event = $data['id_event']; 
                    $asal_speaker = $data['asal_speaker']; 

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

                    echo "<tr>"; 
                    echo "<td>$id</td>";
                    echo "<td>".$data['nama_speaker']."</td>";
                    echo "<td>".$data['email_speaker']."</td>";
                    echo "<td>".$data['hp_speaker']."</td>";
                    echo "<td><img src='../img/uploads/speaker/".$data['img_speaker']."' width='100' height='100'></td>";
                    echo "<td>".$data['ppi_speaker']."</td>";
                    echo "<td>".$data['lingkup_jurusan']."</td>";
                    echo "<td>".$data['tentang_speaker']."</td>";
                    echo "<td>".$data_event['judul_event']."</td>";
                    echo "<td>$prov</td>";
                    echo "<td><a href='../edit/edit_speaker.php?id=$id'><i class='fa fa-lg fa-pencil-square-o'></i></a> <a href='../delete/delete_speaker.php?id=$id'><i class='fa fa-lg fa-trash-o'></i></a></td>"; 
                    echo "</tr>"; 
                }
            ?>
        </table>
    </body>
</html>