<?php

// required files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";
require_once APP_DIR . "Models/admin/Adminproduct.php";

// create objects
$db_object = new Database();
$user_object = new User($db_object);
$product_object = new Adminproduct($db_object);


debug($_POST);


if (isset($_POST["add_product"])) {
    require_once APP_DIR . "Utils/upload.php";
    //check if files were selected
    if (isSelected(["product_image1", "product_image1", "product_image3", "product_image4"])) {

        //check if file names are not error
        $product_image1 = getFilename("product_image1", "products");
        $product_image2 = getFilename("product_image2", "products");
        $product_image3 = getFilename("product_image3", "products");
        $product_image4 = getFilename("product_image4", "products");
        if (
            $product_image1 != "error" &&
            $product_image2 != "error" &&
            $product_image3 != "error" &&
            $product_image4 != "error"
        ) {
            $_POST["product_image1"] = $product_image1;
            $_POST["product_image2"] = $product_image2;
            $_POST["product_image3"] = $product_image3;
            $_POST["product_image4"] = $product_image4;

            $product_object->addProduct($_POST);
            upload("product_image1", $product_image1);
            upload("product_image2", $product_image2);
            upload("product_image3", $product_image3);
            upload("product_image4", $product_image4);
        }
    } else {
        echo "Please select images to upload";
    }
}



// load views
require_once APP_DIR . "Views/pages/add-product.php";
