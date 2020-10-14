<?php
    $connection = mysqli_connect('localhost','root','','test_db')
    if($connection == false){
        echo mysqli_connect_error();
        exit();
    }
?>