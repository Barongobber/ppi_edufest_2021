<?php 
    include "../config/connection.php"; 
    if(isset($_POST['submit'])){
        $id = $_POST['judul']; 
        $nama = $_POST['nama']; 
        $domisili = $_POST['domisili']; 
        $email = $_POST['email']; 

        if(empty($_POST['hp'])){
            $hp_peserta = '';
            $hp = ''; 
        } else {
            $hp_peserta = ', hp_peserta';
            $entry = $_POST['hp']; 
            $hp = ", '$entry'";

        }

        $sql_ins = "INSERT INTO absen (id_absen_event, nama_peserta, domisili_peserta, email_peserta $hp_peserta) VALUES ($id, '$nama', $domisili, '$email' $hp)"; 
        $query_ins = mysqli_query($conn, $sql_ins); 
        if($query_ins == 1){
            echo "<script> alert('Peserta Berhasil Ditambahkan!'); window.location.href='../tables/absen.php'; </script>"; 
        } else {
            //echo $sql_ins; 
            echo "<script> alert('Failed! Pastikan tidak ada email yang sama dalam satu event!'); window.location.href='../tables/absen.php'; </script>"; 
        }
    }
?>
<html>
    <head>
        <?php include "../asset/css/sources.php"; ?>
        <link rel='stylesheet' href='../asset/css/subs.css'>
    </head>
    <body>
        <h3>TAMBAH PESERTA</h3>
        <form action="add_absen.php" method="post">
            <table>
                <caption><a href='../tables/absen.php'><i class="fa fa-chevron-left"></i> Absensi Peserta </a></caption>
                <tr>
                    <td>Event</td>
                    <td> : </td>
                    <td>
                        <select name='judul'>
                        <?php 
                            $sql_opt = "SELECT id_event, judul_event FROM event";
                            $query_opt = mysqli_query($conn, $sql_opt); 
                            while ($data_opt = mysqli_fetch_assoc($query_opt)){
                        ?>
                                <option value=<?php echo $data_opt['id_event']; ?>> <?php echo $data_opt['judul_event']; ?></option> 
                        <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Nama Peserta</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Domisili Peserta</td>
                    <td> : </td>
                    <td>
                        <select name="domisili">
                        <?php
                            $sql_dom = "SELECT*FROM provinsi"; 
                            $query_dom = mysqli_query($conn, $sql_dom);
                            while($data_dom = mysqli_fetch_assoc($query_dom)){
                        ?>
                                <option value=<?php echo $data_dom['id_provinsi']; ?>><?php echo $data_dom['provinsi']; ?></option>
                        <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Email Peserta</td>
                    <td> : </td>
                    <td>
                        <input type="email" name="email" required>
                    </td>
                </tr>
                <tr>
                    <td>Nomor HP</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="hp">
                    </td>
                </tr>
                <tr>
                    <td colspan='2'></td>
                    <td><button type="submit" class='btn' name="submit">&nbsp; Tambah Peserta &nbsp;</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>