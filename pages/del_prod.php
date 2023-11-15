<?php

include '../includes/connection.php';
$id = $_POST['id'];
$query = "DELETE FROM product where PRODUCT_ID = '$id'";
$result = mysqli_query($db, $query) or die(mysqli_error($db));

if ($result) {
    echo '1';
} else {
    echo '0';
}
