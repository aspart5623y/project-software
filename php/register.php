<?php
    include 'db_connect.php'; 
    include 'config.php';


    
    function registerUser() {

        $fname = $lname = $email = $phone = $password = '';


        // get input items
        global $conn;
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
        $user_id = 'fpno/cs/hod/' . date('dmy') . time(); 
 

        // check if database user_table is empty
        $checkDB = mysqli_query($conn, "SELECT * FROM users_table");
    
        if (mysqli_num_rows($checkDB) == 0) {
            // set first user as admin
            $userType = "admin";
        } else {
            // then other users as user
            $userType = "user";
        }
        

        // check if email exist already
        $checkUser = mysqli_query($conn, "SELECT * FROM users_table WHERE email = '$email'");
    
        if (mysqli_num_rows($checkUser) > 0) {
            echo "Email already exist in database!";            
        } 
        // insert if email is new
        else {
            $query = mysqli_query($conn, "INSERT INTO users_table (full_name, user_id_num, email, phone, password, user_type) VALUES ('$fname $lname', '$user_id', '$email', '$phone', '$password', '$userType')");

            if ($query) {
                echo SITEURL . 'user-dashboard/';
                session_start();
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_type'] = $userType;
            } else {
                echo "Error in insertion";
            }

        }

    }

    registerUser();

?>