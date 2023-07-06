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


    function insertProduct($postingTitle, $price, $description, $sellerId, $location, $postalCode, $categoryId, $deliveryAvailable, $productCondition){
        dbQuery("
            INSERT INTO product(postingTitle, price, description, sellerId, location, postalCode, categoryId, deliveryAvailable, productCondition)
            VALUES(:postingTitle, :price, :description, :sellerId, :location, :postalCode, :categoryId, :deliveryAvailable, :productCondition)
        ", [
            'postingTitle' => $postingTitle,
            'price' => $price,
            'description' => $description,
            'sellerId' => $sellerId,
            'location' => $location,
            'postalCode' => $postalCode,
            'categoryId' => $categoryId,
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

    function insertUser($email, $phoneNumber, $firstName, $lastName, $hashedPassword){
        dbQuery("
            INSERT INTO user(email, phoneNumber, firstName, lastName, hashedPassword)
            VALUES(:email, :phoneNumber, :firstName, :lastName, :hashedPassword)
        ", [
            'email' => $email,
            'phoneNumber' => $phoneNumber,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'hashedPassword' => $hashedPassword
        ]);
    }

    //If the inputted email is not in the table, the function returns false
    function getUserFromEmail($email) {
        $user = dbQuery ( "
        SELECT * FROM `user` WHERE `email` = '$email'
        ")->fetch();  
        return $user;
    }


    function displayCategory($categoryId) {
        $product = dbQuery ( "
        SELECT * 
        FROM `categories` 
        INNER JOIN product ON categories.categoryId=product.categoryId
        WHERE categories.categoryId=$categoryId;
        ")->fetchAll();  
        return $product;
    }

    function getAllCategoryNames() {
        $categories = dbQuery ( "
            Select *
            FROM categories
            ORDER BY categoryId ASC  
            ")->fetchAll(); 

        return $categories;
    }

    //fetch all thes saved posts from a specific user
    function getSavedPosts($userId) {
        $savedPosts = dbQuery ( "
            Select *
            FROM `savedPosts` 
            WHERE `userId` = '$userId'
            ")->fetchAll(); 
        return $savedPosts;
    }

    function insertSavedPost($userId, $productId){
        dbQuery("
            INSERT INTO savedPosts(userId, productId)
            VALUES(:userId, :productId)
        ", [
            'userId' => $userId,
            'productId' => $productId
        ]);
    }

    

  