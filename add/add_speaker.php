<?php 
    include "../config/connection.php"; 
    
    //id
    $sql_id = "SELECT MAX(id_speaker) AS maxid FROM speaker"; 
    $query_id = mysqli_query($conn, $sql_id); 
    if(mysqli_num_rows($query_id) == 0){
        $id = 1; 
    } else {
        $data_id = mysqli_fetch_assoc($query_id); 
        $id = $data_id['maxid'] + 1; 
    }
    
    if(isset($_POST['submit'])){
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $hp = $_POST['hp'];
        $jurusan = $_POST['jurusan']; 
        $about = $_POST['about']; 
        $event = $_POST['event']; 
        $asal = $_POST['asal']; 
        $ppis = $_POST['ppispeaker']; 

        if(empty($ppis)){
            $ppi_speaker = ''; 
            $ppis = ''; 
        } else {
            $ppi_speaker = ', ppi_speaker'; 
            $entry1 = $_POST['ppispeaker']; 
            $ppis = ", '$entry1'"; 
        }

        if(empty($about)){
             $tentang_speaker = ''; 
             $about = ''; 
        } else {
            $tentang_speaker = ', tentang_speaker';
            $entry2 = $_POST['about']; 
            $about = ", '$about'"; 
        }

        if(empty($asal)){
            $asal_speaker = ''; 
            $asal = ''; 
        } else {
            $asal_speaker = ', asal_speaker'; 
            $entry3 = $_POST['asal']; 
            $asal = ", '$entry3'"; 
        }

        //pic
        $filename = $_FILES["uploadfile"]["name"]; 
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        //check 
        $sql_check = "SELECT img_speaker FROM speaker WHERE img_speaker='$filename'"; 
        $query_check = mysqli_query($conn, $sql_check); 
        $duplicates = mysqli_num_rows($query_check); 
        $folder = "../img/uploads/speaker/";
        $ext = pathinfo($_FILES['uploadfile']['name']);
        $ext2 = $ext['extension']; 
        $accepted = array('jpg','jpeg','png','tiff','png');
        $date = time(); 

        if ($duplicates > 0) {
            $filename2=$date.$filename;  
        } else {
            $filename2 = $filename; 
        }

        if(!empty($ext2) && !in_array($ext2, $accepted)) {
            echo "<script>alert('Upload Failed! Please insert image only!'); window.location.href='add_speaker.php'; </script>";  
        } else {
            if (move_uploaded_file($tempname, $folder.$filename2)){
                $sql_ins = "INSERT INTO speaker (id_speaker, nama_speaker, email_speaker, hp_speaker, img_speaker $ppi_speaker, lingkup_jurusan $tentang_speaker, id_event $asal_speaker) VALUES ($id, '$name', '$email', '$hp', '$filename2' $ppis ,'$jurusan' $about ,$event $asal)"; 
                $query_ins = mysqli_query($conn, $sql_ins);  
                if($query_ins == 1){
                    echo "<script> alert('Speaker Berhasil Ditambahkan!'); window.location.href='../tables/speaker.php'; </script>"; 
                } else {
                    //echo $sql_ins; 
                    echo "<script> alert('Failed!'); window.location.href='../tables/speaker.php'; </script>"; 
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
        <h3>TAMBAH SPEAKER</h3>
        <form action="add_speaker.php" method="post" enctype="multipart/form-data">
            <table>
                <caption><a href='../tables/speaker.php'><i class="fa fa-chevron-left"></i> Speaker </a></caption>
                <tr>
                    <td>Nama Speaker</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="name" required>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> : </td>
                    <td>
                        <input type="email" name="email" required>
                    </td>
                </tr>
                <tr>
                    <td>Nomor HP</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="hp" required>
                    </td>
                </tr>
                <tr>
                    <td>PPI Speaker</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="ppispeaker">
                    </td>
                </tr>
                <tr>
                    <td>Jurusan Speaker</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="jurusan" required>
                    </td>
                </tr>
                <tr>
                    <td>Additional Information</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="about">
                    </td>
                </tr>
                <tr>
                    <td>Event</td>
                    <td> : </td>
                    <td>
                        <select name="event">
                        <?php 
                            $sql_event = "SELECT id_event, judul_event FROM event"; 
                            $query_event = mysqli_query($conn, $sql_event); 
                            while ($data_event = mysqli_fetch_assoc($query_event)){
                                $ide = $data_event['id_event']; 
                                $event = $data_event['judul_event'];
                                echo "<option value=$ide>$event</option>"; 
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Asal Speaker</td>
                    <td> : </td>
                    <td>
                        <select name="asal">
                            <option value="">-</option>
                        <?php 
                            $sql_prov = "SELECT*FROM provinsi"; 
                            $query_prov = mysqli_query($conn, $sql_prov); 
                            while ($data_prov = mysqli_fetch_assoc($query_prov)){
                                $idp = $data_prov['id_provinsi']; 
                                $prov = $data_prov['provinsi'];
                                echo "<option value=$idp>$prov</option>"; 
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td> : </td>
                    <td>
                        <input id="imgInp" type="file" name="uploadfile" value="" required>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'></td>
                    <td><button type="submit" name="submit">&nbsp; Tambah Speaker &nbsp;</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>