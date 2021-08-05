<?php

if(isset($_POST['signup-submit']) {
    require 'dbh.inc.php';

    $email = $_POST['email'];
    $password = $_POST['pwd'];

    $sql = "SELECT * FROM users WHERE user_email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt,$sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
    }
    
    else {
        mysqli_stmt_bind_param($stmt,"s",$email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $pwdcheck = password_verify($password, $roe['user_pwd']);
            if ($pwdcheck == false) {
                header("Location: ../index.php?error=wrongpwd");
                exit();
            }
            else if ($pwdcheck == true) {
                session_start();
                $_SESSION['user_email'] = $row['user_email'];
                $_SESSION['user_id'] = $row['user_id'];

                header("Location: ../index.php?login=success");
                exit();
            }
            else {
                header("Location: ../index.php?error=wrongpwd");
                exit();
            }

        }

        else {
            header("Location: ../index.php?error=nouser");
            exit();
        }

    }

}

else {
    header("Location: ../signup.php");
    exit();
}