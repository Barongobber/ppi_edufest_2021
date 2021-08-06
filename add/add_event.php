<?php 
    include "../config/connection.php"; 
    //id
    $sql_id = "SELECT MAX(id_event) AS maxid FROM event"; 
    $query_id = mysqli_query($conn, $sql_id); 
    if(mysqli_num_rows($query_id) == 0){
        $id = 1; 
    } else {
        $data_id = mysqli_fetch_assoc($query_id); 
        $id = $data_id['maxid'] + 1; 
    }
    
    if(isset($_POST['submit'])){
        $judul = $_POST['title']; 
        $wilayah = $_POST['wilayah']; 
        $tanggal = $_POST['tanggal']; 
        $detail = $_POST['detail']; 
        $link = $_POST['link']; 

        //pic
        $filename = $_FILES["uploadfile"]["name"]; 
        $tempname = $_FILES["uploadfile"]["tmp_name"];

        //check 
        $sql_check = "SELECT img_event FROM event WHERE img_event='$filename'"; 
        $query_check = mysqli_query($conn, $sql_check); 
        $duplicates = mysqli_num_rows($query_check); 
        $folder = "../img/uploads/event/";
        $ext = pathinfo($_FILES['uploadfile']['name']);
        $ext2 = $ext['extension']; 
        $accepted = array('jpg','jpeg','JPG', 'JPEG', 'png', 'PNG', 'tiff','HEIC');
        $date = time(); 

        if ($duplicates > 0) {
            $filename2=$date.$filename;  
        } else {
            $filename2 = $filename; 
        }

        if(empty($ext2)){
            echo "<script>alert('Insert image!'); window.location.href='add_event.php'; </script>"; 
        } else if(!empty($ext2) && !in_array($ext2, $accepted)) {
            echo "<script>alert('Upload Failed! Please insert image only!'); window.location.href='add_event.php'; </script>";  
            //echo $sql_ins; 
        } else {
            if (move_uploaded_file($tempname, $folder.$filename2)){
                $sql_ins = "INSERT INTO event (id_event, judul_event, img_event, wilayah_event, tanggal_event, detail_event, link_daftar_event) VALUES ($id, '$judul', '$filename2', $wilayah, '$tanggal', '$detail', '$link')"; 
                $query_ins = mysqli_query($conn, $sql_ins); 
                if($query_ins == 1){
                    echo "<script> alert('Event Berhasil Ditambahkan!'); window.location.href='../tables/event.php'; </script>"; 
                } else {
                    //echo $sql_ins; 
                    echo "<script> alert('Failed!'); window.location.href='../tables/event.php'; </script>"; 
                } 
            } 
        }
    }
?>
<html>
    <head>
        <?php include "../asset/css/sources.php"; ?>
        <link rel='stylesheet' href='../asset/css/subs.css'>
    </head>
    <body>
        <h3>TAMBAH EVENT</h3>
        <form action="add_event.php" method="post" enctype="multipart/form-data">
            <table>
                <caption><a href='../tables/event.php'><i class="fa fa-chevron-left"></i> Events </a></caption>
                <tr>
                    <td>Judul Event</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="title" required>
                    </td>
                </tr>
                <tr>
                    <td>Wilayah</td>
                    <td> : </td>
                    <td>
                        <select name="wilayah">
                        <?php
                            $sql_wil = "SELECT*FROM wilayah";
                            $query_wil = mysqli_query($conn, $sql_wil); 
                            while($data_wil = mysqli_fetch_assoc($query_wil)){
                        ?>
                                <option value="<?php echo $data_wil['id_wilayah']; ?>"><?php echo $data_wil['nama_wilayah']; ?></option>
                        <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Event</td>
                    <td> : </td>
                    <td>
                        <input type="date" name="tanggal" required>
                    </td>
                </tr>
                <tr>
                    <td>Detail Event</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="detail" required>
                    </td>
                </tr>
                <tr>
                    <td>Link Event</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="link" required>
                    </td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td> : </td>
                    <td>
                    <input id="imgInp" type="file" name="uploadfile" value="">
                    </td>
                </tr>
                <tr>
                    <td colspan='2'></td>
                    <td><button type="submit" name="submit">&nbsp; Tambah Event &nbsp;</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>