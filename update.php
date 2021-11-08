<?php
include "connection.php";

$result = mysqli_query($link,"SELECT * FROM crud WHERE Name='" . $_GET['Name'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form action="" method="POST">
        Name:- <input type="text" name="Name" value="<?php echo $row['Name']; ?>"><br><br>
        Email:- <input type="text" name="Email" value="<?php echo $row['Email']; ?>"><br><br>
        Designation:- <input type="text" name="Designation" value="<?php echo $row['Designation']; ?>"><br><br>
        Salary:- <input type="text" name="Salary" value="<?php echo $row['Salary']; ?>"><br><br>
        Date:- <input type="text" name="Date" value="<?php echo $row['Date']; ?>"><br><br>
        <input type="submit" name="submit" value="submit"/><br><br>
    </form>

</form>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
    mysqli_query($link,"UPDATE `crud` SET `Name`='" . $_POST['Name'] . "',`Email`='" . $_POST['Email'] . "',`Designation`='" . $_POST['Designation'] . "',`Salary`='" . $_POST['Salary'] . "',`Date`='" . $_POST['Date'] . "' WHERE Name='" . $_POST['Name'] . "'");
?> <meta http-equiv="refresh" content="0; url=http://localhost/prashant/form.php" /> <?php
}

?>
