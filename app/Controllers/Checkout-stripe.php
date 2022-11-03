<?php

require_once APP_DIR . "Utils/code.precheckout.php";

$cart_details = $cart_object->getCartDetails($user_id);
$cart_object->calculateTotal();

$stripe = Stripeclient::getClient();

header('Content-Type: application/json');

$YOUR_DOMAIN = BASE_URL;

$checkout_session = $stripe->checkout->sessions->create([
    'line_items' => [[
        # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
        'name' => 'Cart Checkout',
        'images' => ['https://source.unsplash.com/0sihmMSmnoE/300x300'],
        'amount' => $cart_object->getTotal() * 100,
        'currency' => 'USD',
        'quantity' => 1,
    ]],
    'payment_method_types' => ['card'],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . 'checkout/success/stripe/{CHECKOUT_SESSION_ID}',
    'cancel_url' => $YOUR_DOMAIN . 'checkout',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
