<?php

// required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";

// create objects
$db_object = new Database();
$user_object = new User($db_object);

// debug($_POST);
// debug($_SESSION);

if (isset($_POST["login"])) {

    if ($user_object->login($_POST)) {
        $_SESSION["message"] = "Login was successful";
        header("location: store");
        exit;
    } else {
        $_SESSION["message"] = "Incorrect details";
    }
}



// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/login1.php";
require_once APP_DIR . "Views/footer.php";
