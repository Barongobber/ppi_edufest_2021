<?php 
    include "../config/connection.php"; 
    include "../asset/css/sources.php";
    $sql = "SELECT*FROM faq"; 
    $query = mysqli_query($conn, $sql);
?>

<html>
    <head>
        <link rel="stylesheet" href="../asset/css/tables.css">
        <h1 style="text-align:center; color:white;"><i class="fa fa-question-circle"></i> FREQUENTLY ASKED QUESTION <i class="fa fa-question-circle"></i></h1>
        <hr>
    </head>
    <body class="container">
        <table>
            <thead>
                <tr class='none'>
                    <td><a href='../main.php'><i class="fa fa-chevron-left"></i> Main Menu</a></td>
                    <td colspan='2'></td>
                    <td><a href='../add/add_faq.php'>Tambah FAQ <i class="fa fa-plus"></i></a></td>
                </tr>
            </thead>
            <tr>
                <th>ID</th>
                <th>Questions</th>
                <th>Answers</th>
                <th>Actions</th>
            </tr>
            <?php 
                while ($data = mysqli_fetch_assoc($query)){
                    $id = $data['id_faq']; 
                    echo "<tr>"; 
                    echo "<td>$id</td>";
                    echo "<td>".$data['question_faq']."</td>";
                    echo "<td>".$data['answer_faq']."</td>";
                    echo "<td><a href='../edit/edit_faq.php?id=$id'><i class='fa fa-lg fa-pencil-square-o'></i></a> <a href='../delete/delete_faq.php?id=$id'><i class='fa fa-lg fa-trash-o'></i></a></td>"; 
                    echo "</tr>"; 
                }
            ?>
        </table>
    </body>
</html>