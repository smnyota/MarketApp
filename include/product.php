<?php
//CRUD Functions for Product Database

    function getAllProducts() {
        $products = dbQuery ( "
            Select *
            FROM product
            ORDER BY productId ASC  
            ")->fetchAll(); 

        return $products;
    }

    function getProduct($productId) {
        $product = dbQuery ( "
            SELECT * 
            FROM product 
            WHERE `productId` = $productId
        ")->fetch();  
        return $product;
    }

    function insertProduct($postingTitle, $price, $description, $sellerId, $location, $postalCode, $category, $deliveryAvailable, $productCondition){
        dbQuery("
            INSERT INTO product(postingTitle, price, description, sellerId, location, postalCode, category, deliveryAvailable, productCondition)
            VALUES(:postingTitle, :price, :description, :sellerId, :location, :postalCode, :category, :deliveryAvailable, :productCondition)
        ", [
            'postingTitle' => $postingTitle,
            'price' => $price,
            'description' => $description,
            'sellerId' => $sellerId,
            'location' => $location,
            'postalCode' => $postalCode,
            'category' => $category,
            'deliveryAvailable' => $deliveryAvailable,
            'productCondition' => $productCondition
        ]);
    }


     //If the query does not return any results, the function returns false (bool)
    function getUser($email, $phoneNumber) {
        $user = dbQuery ( "
        SELECT * FROM `user` WHERE `email` = '$email' and `phoneNumber` = '$phoneNumber'
        ")->fetch();  
        return $user;
    }



    function insertUser($email, $phoneNumber, $firstName, $lastName){
        dbQuery("
            INSERT INTO user(email, phoneNumber, firstName, lastName)
            VALUES(:email, :phoneNumber, :firstName, :lastName)
        ", [
            'email' => $email,
            'phoneNumber' => $phoneNumber,
            'firstName' => $firstName,
            'lastName' => $lastName
        ]);
    }


    //If the inputted email is not in the table, the function returns false
    function getUserFromEmail($email) {
        $user = dbQuery ( "
        SELECT * FROM `user` WHERE `email` = '$email'
        ")->fetch();  
        return $user;
    }

  