<?php
include('../Models/database.php');
session_start();
if (isset($_GET['ProductID'])) {
    $ProductID = $_GET['ProductID'];
    $sql = "SELECT * FROM Products WHERE ProductID = $ProductID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $product = $result->fetch_assoc();

        if (isset($_SESSION['cart'])) {
            $array_product = $_SESSION['cart'];
            $found = false;

            foreach ($array_product as &$item) {
                if ($item['ProductID'] == $ProductID) {
                    $item['Quantity']++;
                    $found = true;
                    break;
                }
            }

            if (!$found) {
                $product['Quantity'] = 1;
                $array_product[] = $product;
            }

            $_SESSION['cart'] = $array_product;
        } else {
            $product['Quantity'] = 1;
            $_SESSION['cart'] = array($product);
        }
        
        header("Location: product_detail.php?ProductID=$ProductID");
        exit;
    } else {
        echo "Product not found.";
    }
} else {
    echo "ProductID is not defined.";
    exit;
}

?>