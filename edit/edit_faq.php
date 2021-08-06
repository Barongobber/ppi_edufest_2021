<?php 
    include "../config/connection.php"; 
    //id
    $id = $_REQUEST['id']; 
    $sql = "SELECT*FROM faq WHERE id_faq=$id"; 
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query); 
    
    if(isset($_POST['submit'])){
        $question = $_POST['question']; 
        $answer = $_POST['answer']; 

        $sql_edit = "UPDATE faq SET question_faq='$question', answer_faq='$answer' WHERE id_faq=$id"; 
        $query_edit = mysqli_query($conn, $sql_edit); 
        if($query_edit == 1){
            echo "<script> alert('FAQ Berhasil Diedit!'); window.location.href='../tables/faq.php'; </script>"; 
        } else {
            //echo $sql_edit; 
            echo "<script> alert('Failed!'); window.location.href='../tables/faq.php'; </script>"; 
        }
    }
?>
<html>
    <head>
        <?php include "../asset/css/sources.php"; ?>
        <link rel='stylesheet' href='../asset/css/subs.css'>
    </head>
    <body>
        <h3>EdIT FAQ</h3>
        <form action="edit_faq.php?id=<?php echo $id; ?>" method="post">
            <table>
                <caption><a href='../tables/faq.php'><i class="fa fa-chevron-left"></i> FAQ </a></caption>
                <tr>
                    <td>Question</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="question" value="<?php echo $data['question_faq']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Answer</td>
                    <td> : </td>
                    <td>
                        <input type="text" name="answer" value="<?php echo $data['answer_faq']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td colspan='2'></td>
                    <td><button type="submit" class='btn' name="submit">&nbsp; Edit FAQ &nbsp;</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>