<?php

require_once('../configuration/config.php');
require_once('../operations/functions.php');

if ($_POST['username']) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //* Server side validations
    if (empty($username || $password)) {
        redirectWithError("empty_fileds");
    } else {
        $SQL = "SELECT * FROM customer WHERE username=?";
        $statement = mysqli_stmt_init($conn);

        if (mysqli_stmt_prepare($statement, $SQL)) {

            //* Binding username with the parameter
            mysqli_stmt_bind_param($statement, 's', $username);
            mysqli_stmt_execute($statement);

            //*

            $result = mysqli_stmt_get_result($statement);

            if ($row = mysqli_fetch_assoc($result)) {

                //* Password Verfication
                $passCheck = password_verify($password, $row['password']);

                //* 
                if ($passCheck == false) {
                    redirectWithError("wrong_password");
                } else if ($passCheck == true) {
                    session_start();
                    $_SESSION['sessionUser'] = $row['username'];

                    $location = "Location: ../index.php?success=success";
                    $location = str_replace(PHP_EOL, '', $location);
                    header($location);
                    exit();
                } else {
                    redirectWithError("wrong_password");
                }
            } else {
                redirectWithError("user_not_found");
            }
        } else {
            redirectFourZeroFour("SQL_Server_Error");
        }
    }
} else {
    redirectWithError("restricted");
}
