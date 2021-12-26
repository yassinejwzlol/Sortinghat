<?php
    include "../db/Connection.php";
    // test database
    $database = new Database();
    $products = $database->getQuery("select * from  informatiepersoon");
    echo json_encode($products);
    
?>