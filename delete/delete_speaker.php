<?php 
    include "../config/connection.php"; 
    $id = $_REQUEST['id']; 
    $sql_img = "SELECT img_speaker FROM speaker WHERE id_speaker=$id"; 
    $query_img = mysqli_query($conn, $sql_img); 
    $data_img = mysqli_fetch_assoc($query_img); 

    $sql = "DELETE FROM speaker WHERE id_speaker=$id"; 
    $query = mysqli_query($conn, $sql); 
    if($query == 1){
        $img = '../img/uploads/speaker/'.$data_img['img_speaker']; 
        unlink($img); 
        echo "<script> alert('Success!'); window.location.href='../tables/speaker.php'; </script>"; 
    } else { 
        echo "<script> alert('Failed!'); window.location.href='../tables/speaker.php'; </script>"; 
    }
?>