<?php
    include 'db_connection.php';

    $selectedUser = $_POST['delUser'];
    $sql = "DELETE FROM users WHERE name = '$selectedUser';";
    $result = mysqli_query($conn, $sql);
    header("Location: http://localhost/PhpFrontAndBack-main");
?>