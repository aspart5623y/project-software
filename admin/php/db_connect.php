<?php 

    $conn = mysqli_connect('localhost', 'root', '', 'booking_db');
    if(!$conn) {
        die('Please Your connection '. mysqli_error());
    }


?>