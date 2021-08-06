<?php 
    include "../config/connection.php"; 
    //id
    $sql_id = "SELECT MAX(id_faq) AS maxid FROM faq"; 
    $query_id = mysqli_query($conn, $sql_id); 
    if(mysqli_num_rows($query_id) == 0){
        $id = 1; 
    } else {
        $data_id = mysqli_fetch_assoc($query_id); 
        $id = $data_id['maxid'] + 1; 
    }
    
    if(isset($_POST['submit'])){
        $question = $_POST['question']; 
        $answer = $_POST['answer']; 

        $sql_ins = "INSERT INTO faq (id_faq, question_faq, answer_faq) VALUES ($id, '$question', '$answer')"; 
        $query_ins = mysqli_query($conn, $sql_ins); 
        if($query_ins == 1){
            echo "<script> alert('FAQ Berhasil Ditambahkan!'); window.location.href='../tables/faq.php'; </script>"; 
        } else {
            //echo $sql_ins; 
            echo "<script> alert('Failed!'); window.location.href='../tables/faq.php'; </script>"; 
        }
    }
?>
<html>
    <head>
        <?php include "../asset/css/sources.php"; ?>
        <link rel='stylesheet' href='../asset/css/subs.css'>
    </head>
    <body class='container'>
        <h3>TAMBAH FAQ</h3>
        <form action="add_faq.php" method="post">
            <table>
                <caption><a href='../tables/faq.php'><i class="fa fa-chevron-left"></i> FAQ </a></caption>
                <tr>
                    <td>Question</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="question" required>
                    </td>
                </tr>
                <tr>
                    <td>Answer</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="answer" required>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'></td>
                    <td><button type="submit" name="submit">&nbsp; Tambah FAQ &nbsp;</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>