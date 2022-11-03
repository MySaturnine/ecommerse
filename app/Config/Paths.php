<?php

/**
 * Load PHPDOTENV
 */
require_once dirname(__DIR__, 2) . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));

/**
 * Call a specific .env file
 * Note: Comment the code above, remove the comment from the code below
 */
// $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2), '.envServer');
$dotenv->load();

// get protocol
$protocol = "http://"; //manually set protocol
$protocol = ((!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] != "off") || $_SERVER["SERVER_PORT"] == 443) ? "https://" : "http://";


/**
 * Define Paths
 */
define("ROOT_DIR", $_SERVER["DOCUMENT_ROOT"] . $_ENV["PROJECT_PATH"]);
define("APP_DIR", $_SERVER["DOCUMENT_ROOT"] . $_ENV["PROJECT_PATH"] . 'app/');
define("ROOT_URL", $protocol . $_SERVER['SERVER_NAME']);
define("BASE_URL", $protocol . $_SERVER['SERVER_NAME'] . $_ENV["PROJECT_PATH"]);
define("ASSETS_URL", BASE_URL . 'public/Assets/');


function debug($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
