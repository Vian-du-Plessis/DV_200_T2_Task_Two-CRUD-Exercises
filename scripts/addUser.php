<?php
    include 'db_connection.php';

    if( empty($_POST['name'] || empty($_POST['age']) || empty($_POST['occupation'])) ) {
        echo "You need to enter in all the data please";
    } else {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $occupation = $_POST['occupation'];

        $sql = "INSERT INTO users (id, name, age, occupation) VALUES (NULL, '$name', '$age', '$occupation');";
        $result = mysqli_query($conn, $sql);
        header("Location: http://localhost/PhpFrontAndBack-main");
    }
?>