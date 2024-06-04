<?php
include ("./db-form.php");

$sql = "UPDATE downloads SET release_date = '2003-12-15' WHERE item_name = 'Integrated Report' AND reporting_year = '2003' ";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Close the connection
$conn->close();

?>