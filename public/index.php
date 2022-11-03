<?php

// TODO: Change $debug to 1 or 0 to dispplay useful info
$debug = 0;

if (!empty($debug)) {
    include "Serverhelper1.php";
}

// require_once "../../ecommerce_template_v2.0.1_class/app/Config/paths.php";
require_once dirname(__DIR__, 1) . "/app/Config/Paths.php";
require_once APP_DIR . "Config/Router.php";

if (!empty($debug)) {
    include "Serverhelper2.php";
}



get('/home', 'app/Controllers/Homepage.php');

get('/registration', 'app/Controllers/Registration.php');
post('/registration', 'app/Controllers/Registration.php');

get('/login', 'app/Controllers/Login.php');
post('/login', 'app/Controllers/Login.php');

get('/admin/add-product', 'app/Controllers/admin/Adminproduct.php');
post('/admin/add-product', 'app/Controllers/admin/Adminproduct.php');

get('/store', 'app/Controllers/Store.php');
post('/store', 'app/Controllers/Store.php');

get('/details/$id', 'app/Controllers/Details.php');
post('/details/$id', 'app/Controllers/Details.php');

get('/templates', 'app/Controllers/Templates.php');
post('/templates', 'app/Controllers/Templates.php');

get('/cart', 'app/Controllers/Cart.php');
post('/cart', 'app/Controllers/Cart.php');

get('/checkout', 'app/Controllers/Checkout.php');
post('/checkout', 'app/Controllers/Checkout.php');

get('/checkout/stripe', 'app/Controllers/Checkout-stripe.php');
post('/checkout/stripe', 'app/Controllers/Checkout-stripe.php');

get('/checkout/success/$payment/$id', 'app/Controllers/Checkout-success.php');
post('/checkout/success/$payment/$id', 'app/Controllers/Checkout-success.php');

get('/logout', 'app/Controllers/logout.php');
post('/logout', 'app/Controllers/logout.php');

get('/thanks', 'app/Controllers/Thanks.php');
post('/thanks', 'app/Controllers/Thanks.php');


// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
// get(PROJECT_FOLDER, 'app/Controllers/Homepage.php');
get('/', 'app/Controllers/Homepage.php');
// get(PROJECT_FOLDER . 'login', 'app/Controllers/Login.php');

echo "<h1>Could not find a route that matches the url provided</h1>";


// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
//get('/user/$id', 'index.php');

// Dynamic GET. Example with 2 variables
// The $name will be available in user.php
// The $last_name will be available in user.php
//get('/user/$name/$last_name', 'user.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php
//get('/product/$type/color/:color', 'product.php');

// Dynamic GET. Example with 1 variable and 1 query string
// In the URL -> http://localhost/item/car?price=10
// The $name will be available in items.php which is inside the views folder
//get('/item/$name', 'views/items.php');


// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'app/views/404.php');
