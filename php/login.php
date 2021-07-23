<?php 


    include 'db_connect.php';
    include 'config.php';

    function loginUser() {

        $email = $password = $book = '';

        // get input items
        global $conn;
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $book = mysqli_real_escape_string($conn, $_POST['book']);
        $password = md5(mysqli_real_escape_string($conn, $_POST['password']));


        $checkUser = mysqli_query($conn, "SELECT * FROM users_table WHERE email = '$email' AND password = '$password' LIMIT 1");
        $checkEmail = mysqli_query($conn, "SELECT * FROM users_table WHERE email = '$email' LIMIT 1");

        if (mysqli_num_rows($checkUser) > 0) {
            $row = mysqli_fetch_assoc($checkUser);

            if ($book == 'true') {
                $bookLink = 'new-appointment.php';
            } else {
                $bookLink = '';
            }


            if ($row['user_type'] == 'user') {
                echo SITEURL . 'user-dashboard/' . $bookLink;
            } else if ($row['user_type'] == 'admin') {
                echo SITEURL . 'admin/' . $bookLink;
            }


            session_start();
            $_SESSION['user_id'] = $row['user_id_num'];
            $_SESSION['user_type'] = $row['user_type'];
        } 
        else if(mysqli_num_rows($checkEmail) < 1){ 
            echo 'User does not exist. Please create and account!';
        } else {
            echo "incorrect password";
        }

    }


    loginUser();




?>