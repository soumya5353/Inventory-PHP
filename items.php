<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemname = $conn->real_escape_string($_POST['itemname']);
    $itemcode = $conn->real_escape_string($_POST['itemcode']);
    $description = $conn->real_escape_string($_POST['description']);
    $category= $conn->real_escape_string($_POST['category']);
    $subcategory = $conn->real_escape_string($_POST['subcategory']);
    $suppliername = $conn->real_escape_string($_POST['suppliername']);
    $suppliercontact = $conn->real_escape_string($_POST['suppliercontact']);
    $supplierid = $conn->real_escape_string($_POST['supplierid']);
    $quantityinstock = $conn->real_escape_string($_POST['quantityinstock']);
    $recorderlevel = $conn->real_escape_string($_POST['recorderlevel']);
    $unitofmeasure = $conn->real_escape_string($_POST['unitofmeasure']);
    $unitprice = $conn->real_escape_string($_POST['unitprice']);
    $totalvalue = $conn->real_escape_string($_POST['totalvalue']);
    $discount = $conn->real_escape_string($_POST['discount']);
    $warehouselocation = $conn->real_escape_string($_POST['warehouselocation']);
    $shelflocation = $conn->real_escape_string($_POST['shelflocation']);
    $dateofpurchase = $conn->real_escape_string($_POST['dateofpurchase']);
    $expirationdate = $conn->real_escape_string($_POST['expirationdate']);
    $status = $conn->real_escape_string($_POST['status']);


    $sql = "INSERT INTO items (itemname, itemcode, description, category, subcategory, suppliername, 
                        suppliercontact, supplierid, quantityinstock, recorderlevel, unitofmeasure, 
                        unitprice, totalvalue, discount, warehouselocation, shelflocation, dateofpurchase, 
                        expirationdate, status) 
                VALUES ('$itemname', '$itemcode', '$description', '$category', '$subcategory', '$suppliername', 
                        ' $suppliercontact', ' $supplierid', '$quantityinstock', '$recorderlevel', 
                        '$unitofmeasure', ' $unitprice', '$totalvalue', '$discount', '  $warehouselocation', 
                        ' $shelflocation', '$dateofpurchase', '$expirationdate', '$status')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Order Confirmed!!!!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
                   









    
