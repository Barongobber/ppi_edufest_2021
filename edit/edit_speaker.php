<?php 
    include "../config/connection.php"; 
    //id
    $id = $_REQUEST['id']; 
    $sql = "SELECT*FROM speaker WHERE id_speaker=$id"; 
    $query = mysqli_query($conn, $sql); 
    $data = mysqli_fetch_assoc($query); 

    if(isset($_POST['submit'])){
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $hp = $_POST['hp'];
        $jurusan = $_POST['jurusan']; 
        $event = $_POST['event']; 

        if(empty($_POST['ppispeaker'])){
            $ppi_speaker = ', ppi_speaker=NULL';
        } else {
            $entry1 = $_POST['ppispeaker']; 
            $ppi_speaker = ", ppi_speaker='$entry1'"; 
        }

        if(empty($_POST['about'])){
             $about = ', tentang_speaker=NULL'; 
        } else {
            $entry2 = $_POST['about']; 
            $about = ", tentang_speaker='$entry2'";
        }

        if(empty($_POST['asal'])){
            $asal = ', asal_speaker=NULL'; 
        } else {
            $entry3 = $_POST['asal']; 
            $asal = ", asal_speaker=$entry3";
        }

        //pic
        $x=""; 
        if(!empty($_FILES["uploadfile"]["name"])){
            $filename = $_FILES["uploadfile"]["name"]; 
            $ext = pathinfo($_FILES['uploadfile']['name']);
            $ext2 = $ext['extension']; 
            $time = time(); 
            $filename2 = $time.$filename; 
            $tempname = $_FILES["uploadfile"]["tmp_name"]; 
            $folder = "../img/uploads/speaker/".$filename2;
            $accepted = array('jpg','jpeg','png','tiff','png');

            if(!in_array($ext2, $accepted)){
                echo "<script>alert('Upload Failed! Please insert image only!'); window.location.href='edit_speaker.php?id=$id'; </script>";  
            } else {
                if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $folder)){
                    $x=", img_speaker='$filename2'";
                    $cur_img = "../img/uploads/speaker/".$data['img_speaker'];
                    if(file_exists($cur_img)){
                        unlink($cur_img); 
                    }
                }
                
            }
            
        }

        $sql_update = "UPDATE speaker SET nama_speaker='$name', email_speaker='$email', hp_speaker='$hp' $x $ppi_speaker, lingkup_jurusan='$jurusan' $about, id_event=$event $asal WHERE id_speaker=$id"; 
        $query_update = mysqli_query($conn, $sql_update); 
        
        if($query_update == 1){
            //echo $sql_update;
            echo "<script> alert('Speaker Berhasil Diedit!'); window.location.href='../tables/speaker.php'; </script>"; 
        } else {
            //echo $sql_update; 
            echo "<script> alert('Failed!'); window.location.href='../tables/speaker.php'; </script>"; 
        }
    }
?>
<html>
<head>
        <?php include "../asset/css/sources.php"; ?>
        <link rel='stylesheet' href='../asset/css/subs.css'>
    </head>
    <body>
        <h3>EDIT SPEAKER</h3>
        <form action="edit_speaker.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
            <table>
                <caption><a href='../tables/speaker.php'><i class="fa fa-chevron-left"></i> Speaker </a></caption>
                <tr>
                    <td>Nama Speaker</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="name" value="<?php echo $data['nama_speaker']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td> : </td>
                    <td>
                        <input type="email" name="email" value="<?php echo $data['email_speaker']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Nomor HP</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="hp" value="<?php echo $data['hp_speaker']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>PPI Speaker</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="ppispeaker" value="<?php echo $data['ppi_speaker']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Lingkup Jurusan</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="jurusan" value="<?php echo $data['lingkup_jurusan']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Additional Information</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="about" value="<?php echo $data['tentang_speaker']; ?>">
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
                        ?>
                            <option value=<?php echo $ide; if($ide == $data['id_event']){?> selected="selected" <?php } ?>><?php echo $event; ?></option>
                        <?php
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
                            <option value="" <?php if(empty($data['asal_speaker'])){ echo "selected"; } ?>>-</option>
                        <?php 
                            $sql_prov = "SELECT*FROM provinsi"; 
                            $query_prov = mysqli_query($conn, $sql_prov); 
                            while ($data_prov = mysqli_fetch_assoc($query_prov)){
                                $idp = $data_prov['id_provinsi']; 
                                $prov = $data_prov['provinsi'];
                            ?>
                                <option value=<?php echo $idp; if($idp == $data['asal_speaker']){?> selected="selected" <?php } ?>><?php echo $prov; ?></option>
                        <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td> : </td>
                    <td>
                        <img src="../img/uploads/speaker/<?php echo $data['img_speaker']; ?>" width='100' height='100'>
                        <?php echo "../img/uploads/speaker/".$data['img_speaker']; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type='file' name='uploadfile' value=''></td>
                </tr>
                <tr>
                    <td colspan='2'></td>
                    <td><button type="submit" class='btn' name="submit">&nbsp; Edit Speaker &nbsp;</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>