<?php


function getDetails(int $id):array
{
    global $pdo;
    $details = $pdo->query('SELECT * FROM product WHERE id='.$id)->fetchAll(PDO::FETCH_CLASS, 'Product');
    return $details;

}


function getReview(int $id):array
{
    global $pdo;
    $review = $pdo->query('SELECT * FROM review WHERE product_id='.$id)->fetchAll(PDO::FETCH_CLASS, 'review');
    return $review;

}

function getUserReview (int $id):array
{
    global $pdo;
    $review = $pdo->query('SELECT * FROM user WHERE id='.$id)->fetchAll(PDO::FETCH_CLASS, 'User');
    return $review;

}




