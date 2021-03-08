<?php
    if(isset($_POST['deleteText'])) {
        $connection = new mysqli ("mysql.retentionapp.club","retentionadmin","R3t3n@dm1n");

        if ($connection -> connect_errno) {
            echo "Failed to connect to MySQL: " . $connection -> connect_error;
            exit();
          }

        mysqli_select_db($connection,"retentionapp_login");
        $delete = "DELETE FROM quizStrings";

        if ($connection->query($delete) === TRUE) {
            echo "Quiz Reset Successfully";
          } else {
            echo "Error: " . $delete . "<br>" . $connection->error;
          }

        $connection->close();
    }
        ?>