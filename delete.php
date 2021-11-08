<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="refresh" content="0; url=http://localhost/prashant/form.php" />
</head>
<body>
    
</body>
</html>

<?php
include "connection.php";
error_reporting(0);
$sql = "DELETE FROM crud WHERE Name='" . $_GET["Name"] . "'";
if (mysqli_query($link, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);



?>


