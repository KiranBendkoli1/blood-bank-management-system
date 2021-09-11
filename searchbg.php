<?php

session_start();

if(isset($_SESSION['login'])){
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];

?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BloodBank - search by bloodgroup</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>
<?php require_once 'usernav.php' ;?>


    <div class="container">

    <form method="post" class="row g-3">
        <div class="col-auto">
            <label class="visually-hidden">Select Blood Group</label>
        </div>
        <div class="col-auto">
            <select name="bloodgroup" id="bloodgroup">
                <option selected>Choose...</option>
                <option value="A +ve">A+</option>
                <option value="A -ve">A-</option>
                <option value="B +ve">B+</option>
                <option value="B -ve">B-</option>
                <option value="O +ve">O+</option>
                <option value="O -ve">O-</option>
                <option value="AB +ve">AB+</option>
                <option value="AB -ve">AB-</option>
            </select>
        </div>
        <div class="col-auto">
            <input type="submit" class="btn btn-primary mb-3" value="search" name="search" id="search">
        </div>
    </form>

    <?php
        if(isset($_POST['search'])){
            $bloodgroup = $_POST['bloodgroup'];
            $query = "SELECT * FROM donors WHERE bloodgroup='$bloodgroup'";
            $result = $mysqli->query($query);
             
            
            
            if($result->num_rows > 0){
                
                echo "<table border='1'>
                <tr>
                <th>Donor's Name</th>
                <th>Mobile Number</th>
                <th>Blood Group</th>
                <th>Donor's Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>City</th>
                </tr>";

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
            }else{
                echo "0 Results";
            }

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
