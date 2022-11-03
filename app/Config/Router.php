<?php

session_start();

function get($route, $path_to_include)
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        route($route, $path_to_include);
    }
}
function post($route, $path_to_include)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        route($route, $path_to_include);
    }
}
function put($route, $path_to_include)
{
    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        route($route, $path_to_include);
    }
}
function patch($route, $path_to_include)
{
    if ($_SERVER['REQUEST_METHOD'] == 'PATCH') {
        route($route, $path_to_include);
    }
}
function delete($route, $path_to_include)
{
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        route($route, $path_to_include);
    }
}
function any($route, $path_to_include)
{
    route($route, $path_to_include);
}
function route($route, $path_to_include)
{

    // TODO: Show all routes
    if (!empty($_ENV["ROUTER_DEBUG"])) {
        echo "<h4>Start of router request</h4>";
        echo "Original Route: " . $route . "<Br>";
        echo "Modified Route:" . "/" . $_ENV["PROJECT_NAME"] . $route . "<Br>";
        echo "Path: " . $path_to_include . "<br>";
    }

    // TODO: Allow setting routes using /url
    if ($_ENV["PROJECT_PATH"] != "/") {
        $route = "/" . $_ENV["PROJECT_NAME"] . $route;
    }


    //$ROOT = $_SERVER['DOCUMENT_ROOT']; // <<<<<<<<<<<<<<<<<<< original code
    $ROOT = ROOT_DIR;
    if ($route == "/404") {
        //include_once("$ROOT/$path_to_include"); // <<<<<<<<<<<<<<<<<<< original code
        include_once($ROOT . $path_to_include); //<<<<<<<<<<<<<<<<<<< Removed / and quotations
        exit();
    }
    $request_url = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
    $request_url = rtrim($request_url, '/');
    $request_url = strtok($request_url, '?');
    $route_parts = explode('/', $route);
    $request_url_parts = explode('/', $request_url);
    array_shift($route_parts);
    array_shift($request_url_parts);

    // TODO: To remove rotuer testing
    // echo "<h3>More info</h3>";
    // echo "<br> Request URL is " . $request_url . "<br>"; // /class_template/store
    // echo "<br>Router parts (route in index): ";
    // print_r($route_parts); // Array ( [0] => store )
    // echo "<br>Request url parts";
    // print_r($request_url_parts); // Array ( [0] => class_template [1] => store )
    // echo "<br>";

    if ($route_parts[0] == '' && count($request_url_parts) == $_ENV["DIR_COUNT"]) { // <<<<<<<<<<<< Change 0 to DIR_COUNT / 1
        //include_once("$ROOT/$path_to_include"); // <<<<<<<<<<<<<<<<<<< original code
        include_once($ROOT . $path_to_include);
        // TODO: To remove rotuer testing
        // echo "<Br>2 trying to include this path " . $ROOT . $path_to_include . "<br>";
        exit();
    }
    if (count($route_parts) != count($request_url_parts)) {
        // TODO: To remove rotuer testing
        // echo "Count url parts " . count($request_url_parts) . "<br>";
        // echo "<Br>Router parts does not match request url parts";
        return;
    }
    $parameters = [];
    for ($__i__ = 0; $__i__ < count($route_parts); $__i__++) {
        $route_part = $route_parts[$__i__];
        if (preg_match("/^[$]/", $route_part)) {
            $route_part = ltrim($route_part, '$');
            array_push($parameters, $request_url_parts[$__i__]);
            $$route_part = $request_url_parts[$__i__];
        } else if ($route_parts[$__i__] != $request_url_parts[$__i__]) {
            return;
        }
    }

    //include_once("$ROOT/$path_to_include"); // <<<<<<<<<<<<<<<<<<< original code
    // TODO: To remove rotuer testing
    // echo "<Br>3 trying to include this path " . $ROOT . $path_to_include . "<br>";
    include_once($ROOT . $path_to_include);
    exit();
}
function out($text)
{
    echo htmlspecialchars($text);
}
function set_csrf()
{
    if (!isset($_SESSION["csrf"])) {
        $_SESSION["csrf"] = bin2hex(random_bytes(50));
    }
    echo '<input type="hidden" name="csrf" value="' . $_SESSION["csrf"] . '">';
}
function is_csrf_valid()
{
    if (!isset($_SESSION['csrf']) || !isset($_POST['csrf'])) {
        return false;
    }
    if ($_SESSION['csrf'] != $_POST['csrf']) {
        return false;
    }
    return true;
}
