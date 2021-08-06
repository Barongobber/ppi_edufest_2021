<?php 
    include "../config/connection.php"; 
    $id = $_REQUEST['id']; 
    $sql_img = "SELECT img_event FROM event WHERE id_event=$id"; 
    $query_img = mysqli_query($conn, $sql_img); 
    $data_img = mysqli_fetch_assoc($query_img); 
    $img = $data_img['img_event']; 

    $sql = "DELETE FROM event WHERE id_event=$id"; 
    $query = mysqli_query($conn, $sql); 
    if($query == 1){
        $cur_img = '../img/uploads/event/'.$img;
        unlink($cur_img); 
        echo "<script> alert('Success!'); window.location.href='../tables/event.php'; </script>"; 
    } else { 
        echo "<script> alert('Failed!'); window.location.href='../tables/event.php'; </script>"; 
    }
?>