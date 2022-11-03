<?php
require_once APP_DIR . "Utils/code.precheckout.php";

// debug($_POST);
// debug($_SESSION);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cart_id"])) {
        $cart_object->removeFromCart($_POST["cart_id"], $user_id);
        $_SESSION["message"] = "Product removed from cart";
    }
}

$cart_details = $cart_object->getCartDetails($user_id);


// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";

if (empty($cart_details)) {
    require_once APP_DIR . "Views/includes/cart-no-results.php";
} else {
    require_once APP_DIR . "Views/pages/cart.php";
}


require_once APP_DIR . "Views/footer.php";
