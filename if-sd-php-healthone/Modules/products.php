<?php


function getProducts(int $id):array
{
    global $pdo;
    $products = $pdo->query('SELECT * FROM product WHERE category_id='.$id)->fetchAll(PDO::FETCH_CLASS, 'Category');
    return $products;

}
