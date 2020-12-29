<?php 
    $conn = mysqli_connect('localhost', 'root', '', 'tugas');

    if (!$conn){
        echo "".mysqli_connect_error();
    }
?>