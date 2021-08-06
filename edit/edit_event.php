<?php
    include "../config/connection.php";

    //id
    $id = $_REQUEST['id'];
    $sql = "SELECT*FROM event LEFT JOIN wilayah ON event.wilayah_event=wilayah.id_wilayah WHERE id_event=$id";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);


    if(isset($_POST['submit'])){
        $judul = $_POST['title'];
        $wilayah = $_POST['wilayah'];
        $tanggal = $_POST['tanggal'];
        $detail = $_POST['detail'];
        $link = $_POST['link'];

        //pic
        $x="";
        if(!empty($_FILES["uploadfile"]["name"])){
            $filename = $_FILES["uploadfile"]["name"];
            $ext = pathinfo($_FILES['uploadfile']['name']);
            $ext2 = $ext['extension'];
            $time = time();
            $filename2 = $time.$filename.".".$ext2;
            $tempname = $_FILES["uploadfile"]["tmp_name"];
            $folder = "../img/uploads/event/".$filename2;
            $accepted = array('jpg','jpeg','png','tiff','png');

            if(!empty($ext2) && !in_array($ext2, $accepted)){
                echo "<script>alert('Upload Failed! Please insert image only!'); window.location.href='edit_event.php?id=$id'; </script>";
            } else if(!empty($ext2) && in_array($ext2, $accepted)) {
                if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $folder)){
                    $cur_img = "../img/uploads/event/".$data['img_event'];
                    unlink($cur_img);
                    $x=", img_event='$filename2'";
                }
            }
        }

        $sql_edit = "UPDATE event SET judul_event='$judul' $x, wilayah_event=$wilayah, tanggal_event='$tanggal', detail_event='$detail', link_daftar_event='$link' WHERE id_event=$id";
        $query_edit = mysqli_query($conn, $sql_edit);
        if($query_edit == 1){
            echo "<script> alert('Event Berhasil Diedit!'); window.location.href='../tables/event.php'; </script>";
        } else {
            //echo $sql_edit;
            echo "<script> alert('Failed!'); window.location.href='../tables/event.php'; </script>";
        }
    }
?>
<html>
    <head>
        <?php include "../asset/css/sources.php"; ?>
        <link rel='stylesheet' href='../asset/css/subs.css'>
    </head>
    <body>
        <h3>EDIT EVENT</h3>
        <form action="edit_event.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
            <table>
                <caption><a href='../tables/event.php'><i class="fa fa-chevron-left"></i> Event </a></caption>
                <tr>
                    <td>Judul Event</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="title" value="<?php echo $data['judul_event']; ?>" required>
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
                            while ($data_wil = mysqli_fetch_assoc($query_wil)){
                        ?>
                                <option value=<?php echo $data_wil['id_wilayah']; ?> <?php if($data_wil['id_wilayah'] == $data['wilayah_event']){ echo "selected"; } ?>><?php echo $data_wil['nama_wilayah']; ?></option>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Event</td>
                    <td> : </td>
                    <td>
                        <input type="date" name="tanggal" value="<?php echo $data['tanggal_event']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Detail Event</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="detail" value="<?php echo $data['detail_event']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Link Event</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="link" value="<?php echo $data['link_daftar_event']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Gambar</td>
                    <td> : </td>
                    <td>
                        <img src="../img/uploads/event/<?php echo $data['img_event']; ?>" width="100" height="100">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input id="imgInp" type="file" name="uploadfile" value=""></td>
                </tr>
                <tr>
                    <td colspan='2'></td>
                    <td><button type="submit" name="submit">&nbsp; Edit Event &nbsp;</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>
