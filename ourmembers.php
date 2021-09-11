<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "bloodbank";

$mysqli = new mysqli($servername,$username,$password,$db);

if($mysqli->connect_error){
    die("Connection Failed ". $mysqli->connect_error);
}

?>

<?php
// Initialise session
session_start();

if(isset($_SESSION['login'])){

    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBank - Our Members</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    
</head>
<body>

    <?php require_once 'usernav.php' ;?>

    <div class="container justify-content-center">
            <?php

                $query = "SELECT * FROM donors";
                $result = $mysqli->query($query);
                echo "<table border='1' cellspacing='2' cellpadding='5'>
                    <tr>
                    <th>Donor's Name</th>
                    <th>Mobile Number</th>
                    <th>Blood Group</th>
                    <th>Donor's Age</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>City</th>
                    </tr>";
                if($result->num_rows > 0){
                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['donor_name'] . "</td>";
                        echo "<td>" . $row['mobile_no'] . "</td>";
                        echo "<td>" . $row['bloodgroup'] . "</td>";
                        echo "<td>" . $row['age'] . "</td>";
                        echo "<td>" . $row['gender'] . "</td>";
                        echo "<td>" . $row['address'] . "</td>";
                        echo "<td>" . $row['city'] . "</td> ";
                        echo "</tr>";
                    }
                    echo "</table>";
                }
            ?>            
    </div>

    

</body>
</html>

<?php
}
else{
    header("location:index.php");
}
?>