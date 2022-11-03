<?php

// required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Config/Stripeclient.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Cart.php";
require_once APP_DIR . "Models/Stripehelper.php";
require_once APP_DIR . "Models/Order.php";
require_once APP_DIR . "Utils/code.isLoggedIn.php";

// create objects
$db_object = new Database();
$user_object = new User($db_object);
$cart_object = new Cart($db_object);
$order_object = new Order($db_object);
$payment_object = new Stripehelper($db_object);
