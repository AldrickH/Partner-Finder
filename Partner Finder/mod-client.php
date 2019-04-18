<?php

session_start();

if (!isset($_SESSION['login']['client'])) $_SESSION['login']['client'] = false;

// REDIRECT
function redirect($path)
{
    header('Location: ' . $path);
    die();
}

// USER
function getAllUser()
{
    include 'config.php';

    $sql = "SELECT * FROM user";

    if ($result = mysqli_query($conn, $sql)) return $result;
    else return null;
}

function getUserByUsername($username)
{
    include 'config.php';

    $sql = "SELECT * FROM user where username = '$username'";
    if ($result = mysqli_query($conn, $sql)) return mysqli_fetch_assoc($result);
    else return null;
}

function addNewUser($_username, $_fullname, $_phoneNum, $_email, $_gender, $_birthdate, $_address, $_password)
{
    include 'config.php';

    $sql = "SELECT username from user where username='$_username'";

    if ($result = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($result) > 0) {
            return false;
        } else {
            $sql = "INSERT INTO user values ('$_username','$_fullname','$_phoneNum','$_email','$_gender','$_birthdate','$_address','$_password')";
            if (mysqli_query($conn, $sql)) return true;
            else return false;
        }
    }
}

function userLogin($_username, $_password)
{
    include 'config.php';

    $sql = "SELECT * FROM user WHERE username='$_username' AND password='$_password'";

    if (mysqli_query($conn, $sql)) return true;
    else return false;
}

// MESSAGE

function getAllMessageByUsername($_sender, $_receiver)
{
    include 'config.php';

    $sql = "SELECT * FROM message WHERE (sender = '$_sender' OR receiver = '$_sender') AND (sender = '$_receiver' OR receiver = '$_receiver') ORDER BY messageID ASC";

    if ($result = mysqli_query($conn, $sql)) return $result;
    else return null;
}
?>