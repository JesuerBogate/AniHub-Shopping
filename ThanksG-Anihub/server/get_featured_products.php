<?php

include("db.php");

$stmt = $conn->prepare("SELECT * FROM items LIMIT 4");

if ($stmt === false) {
    die('Error in preparing the query: ' . $conn->error);
}

$result = $stmt->execute();

if ($result === false) {
    die('Error in executing the query: ' . $stmt->error);
}

$featured_products = $stmt->get_result();

if ($featured_products === false) {
    die('Error in getting the result: ' . $stmt->error);
}

// Now you can fetch the results as needed
while ($row = $featured_products->fetch_assoc()) {
    echo $row['item_name'] . $row['item_price'] . "<img src=".'assets/img/'.$row['item_image']>" ;
}

?>