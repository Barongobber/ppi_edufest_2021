<?php 
    include "../config/connection.php"; 
    $id = $_REQUEST['id']; 
    $sql = "DELETE FROM faq WHERE id_faq=$id"; 
    $query = mysqli_query($conn, $sql); 
    if($query == 1){
        echo "<script> alert('Success!'); window.location.href='../tables/faq.php'; </script>"; 
    } else { 
        echo "<script> alert('Failed!'); window.location.href='../tables/faq.php'; </script>"; 
    }
?>