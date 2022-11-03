<?php

// required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";

// create objects
$db_object = new Database();
$user_object = new User($db_object);

// debug($_POST);
// debug($_SESSION);

if (isset($_POST["registration"])) {
    $user_object->register($_POST);
    $_SESSION["message"] = "Account successfully created";
    header("location: " . BASE_URL . "login");
    exit;
}


// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/registration.php";
require_once APP_DIR . "Views/footer.php";
