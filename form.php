<center><H1>BY PRASHANT SINGH</H1></center>

<?php
include "connection.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name:- <input type="text" name="Name" value=""><br><br>
        Email:- <input type="text" name="Email" value=""><br><br>
        Designation:- <input type="text" name="Designation" value=""><br><br>
        Salary:- <input type="text" name="Salary" value=""><br><br>
        Date:- <input type="text" name="Date" value=""><br><br>
        <input type="submit" name="submit" value="submit"/><br><br>
    </form>
</body>
</html>


<?php
if(isset($_POST["submit"]))
{
    mysqli_query($link,"insert into crud values('$_POST[Name]','$_POST[Email]','$_POST[Designation]','$_POST[Salary]','$_POST[Date]')") or die(mysqli_error($link));

}

?>
<hr>
<hr>


<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">All Users</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Designation</th>
                                                <th scope="col">Salary</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <?php
                                            $count=0;
                                            $res=mysqli_query($link,"select * from crud");
                                            while($row=mysqli_fetch_array($res))
                                            {
                                           $count=$count+1;
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $count; ?></th>
                                                    <td><?php echo $row["Name"]; ?></td>
                                                    <td><?php echo $row["Email"]; ?></td>
                                                    <td><?php echo $row["Designation"]; ?></td>
                                                    <td><?php echo $row["Salary"]; ?></td>
                                                    <td><?php echo $row["Date"]; ?></td>
                                                    <td><a href="update.php?Name=<?php echo $row["Name"]; ?>">Update</a></td>
                                                    <td><a href="delete.php?Name=<?php echo $row["Name"]; ?>">Delete</a></td>                                                </tr>

                                                <?php

                                            }

                                            ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                        </div>
                        </form>
                    </div>

                </div>

