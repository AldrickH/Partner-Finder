<?php

include 'mod-client.php';

if ($_GET['page'] == "register") {

    $add_user = addNewUser($_POST['username'], $_POST['fullname'], $_POST['phoneNum'], $_POST['email'], $_POST['gender'], $_POST['birthdate'], $_POST['address'], $_POST['password']);

    if (!$add_user) redirect('client-register.php');
    else redirect('client-login.php');

} else if ($_GET['page'] == "login") {

    $userLogin = userLogin($_POST['username'], $_POST['password']);

    if ($userLogin) {
        $userData = getUserByUsername($_POST['username']);
        $_SESSION['username'] = $userData['username'];
        $_SESSION['fullname'] = $userData['fullname'];
        $_SESSION['email'] = $userData['email'];
        $_SESSION['phoneNum'] = $userData['phoneNum'];
        $_SESSION['gender'] = $userData['gender'];
        $_SESSION['birthdate'] = $userData['birthdate'];
        $_SESSION['address'] = $userData['address'];
        $_SESSION['password'] = $userData['password'];

        $_SESSION['login']['user'] = true;
    }
    redirect('client-index.php');

} else if ($_GET['page'] == "logout") {
    session_destroy();
    redirect('client-login.php');

} else if ($_GET['page'] == "send-message") {

    $send_message = addNewMessage($_SESSION['username'], $_POST['user_receiver'], $_POST['messageContent']);

    if ($send_message) redirect('client-message.php');
    
} else if ($_GET['page'] == "search-user") {

    redirect('client-index.php?search=' . $_POST['search']);

} else if ($_GET['page'] == "follow") {

    addNewFollow($_SESSION['username'], $_GET['username']);

    redirect('client-index.php');
    
} else if ($_GET['page'] == "unfollow") {
    
    removeFollow($_SESSION['username'], $_GET['username']);
    redirect('client-index.php');
}
?>