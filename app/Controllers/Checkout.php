<?php
// required files
require_once APP_DIR . "Utils/code.precheckout.php";

$cart_details = $cart_object->getCartDetails($user_id);
$cart_object->calculateTotal();

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/checkout.php";
require_once APP_DIR . "Views/footer.php";
