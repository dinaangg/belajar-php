<?php
include "koneksi.php";
$sql = "UPDATE MyGuests SET lastname='dinozaurus' WHERE id=2";

if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $connection->error;
}

?>