<?php 
    include "../config/connection.php"; 
    include "../asset/css/sources.php"; 
    $sql = "SELECT*FROM event LEFT JOIN wilayah ON event.wilayah_event=wilayah.id_wilayah"; 
    $query = mysqli_query($conn, $sql);
?>

<html>
    <head>
        <link rel="stylesheet" href="../asset/css/tables.css">
        <h1 style="text-align:center; color:white;"><i class="fa fa-calendar"></i> EVENTS <i class="fa fa-calendar"></i></h1>
        <hr>
    </head>
    <body class="container">
        <table>
            <thead>
                <tr class="none">
                    <td><a href='../main.php'><i class="fa fa-chevron-left"></i> Main Menu</a></td>
                    <td colspan="6"></td>
                    <td><a href='../add/add_event.php'>Tambah Event <i class="fa fa-plus"></i></a></td>
                </tr>
            </thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Wilayah</th>
                <th>Tanggal</th>
                <th>Detail</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
            <?php 
                while ($data = mysqli_fetch_assoc($query)){
                    $id = $data['id_event'];
                    $img = $data['img_event'];  
                    echo "<tr>"; 
                    echo "<td>$id</td>";
                    echo "<td>".$data['judul_event']."</td>";
                    echo "<td><img src='../img/uploads/event/$img' width='100' height='100'></td>";
                    echo "<td>".$data['nama_wilayah']."</td>";
                    echo "<td>".$data['tanggal_event']."</td>";
                    echo "<td>".$data['detail_event']."</td>"; 
                    echo "<td>".$data['link_daftar_event']."</td>"; 
                    echo "<td><a href='../edit/edit_event.php?id=$id'><i class='fa fa-lg fa-pencil-square-o'></i></a> <a href='../delete/delete_event.php?id=$id'><i class='fa fa-lg fa-trash-o'></i></a></td>"; 
                    echo "</tr>"; 
                }
            ?>
        </table>
    </body>
</html>