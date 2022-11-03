<?php

// required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";

// create objects
$db_object = new Database();
$user_object = new User($db_object);
$product_object = new Product($db_object);


// debug($_POST);
// debug($_SESSION);

$product_details = $product_object->getAllProducts();


// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/store.php";
require_once APP_DIR . "Views/footer.php";
