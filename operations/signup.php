<?php

require_once('../configuration/config.php');
require_once('../operations/functions.php');

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    if (empty($username) || empty($password)) {
        redirectWithError("empty_fileds");
    } else {


        $sql = "SELECT * FROM customer WHERE username = '" . $username . "';";
        $results = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($results);

        if ($resultCheck > 0) {
            redirectWithError("username_already_taken");
        } else {
            $hashPass = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO customer(username, password) VALUES (?, ?)";

            $statement = mysqli_stmt_init($conn);

            if (!mysqli_stmt_prepare($statement, $sql)) {
                redirectFourZeroFour("SQL_Server_Error");
            } else {

                $bindFailed = mysqli_stmt_bind_param($statement, 'ss', $username, $hashPass);
                if ($bindFailed === false) {
                    echo htmlspecialchars($statement->error);
                    exit();
                }
                mysqli_stmt_execute($statement);
                $newCustomerIdGenerated = mysqli_stmt_insert_id($statement);
                session_start();
                $_SESSION['sessionUser'] = $username;

                $location = "Location: ../index.php?success=success";
                $location = str_replace(PHP_EOL, '', $location);
                header($location);
                exit();
            }
        }
    }
} else {
    redirectWithError("restricted");
}
