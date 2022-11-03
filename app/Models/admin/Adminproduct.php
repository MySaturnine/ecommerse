<?php

class Adminproduct extends Product
{


    public function addProduct($inputs)
    {



        $data = [
            'product_title' => $inputs["product_title"],
            'product_description' => $inputs["product_description"],
            'product_price' => $inputs["product_price"],
            'product_discount_amount' => $inputs["product_discount_amount"],
            'product_quantity' => $inputs["product_quantity"],
            'product_image1' => $inputs["product_image1"],
            'product_image2' => $inputs["product_image2"],
            'product_image3' => $inputs["product_image3"],
            'product_image4' => $inputs["product_image4"],
            'product_status' => $inputs["product_status"],
            'product_category' => $inputs["product_category"],
        ];

        $sql = "INSERT INTO `class_database`.`products`
        (`product_id`,
        `product_title`,
        `product_description`,
        `product_price`,
        `product_discount_amount`,
        `product_quantity`,
        `product_image1`,
        `product_image2`,
        `product_image3`,
        `product_image4`,
        `product_created`,
        `product_status`,
        `product_category`)
        VALUES
        (
        NULL,
        :product_title,
        :product_description,
        :product_price,
        :product_discount_amount,
        :product_quantity,
        :product_image1,
        :product_image2,
        :product_image3,
        :product_image4,
        current_timestamp(),
        :product_status,
        :product_category
        );
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }
}
