<?php

session_start();

if(isset($_SESSION['login'])){
    $fname = $_SESSION['fname'];
    $lname = $_SESSION['lname'];
}
else{
    header("location:adminlogin.php");
}

?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "bloodbank";

$mysqli = new mysqli($servername,$username,$password,$db);

if($mysqli->connect_error){
    die("Connection Failed " . $mysqli->connect_error);
}

$sql = "SELECT donor_id, donor_name, mobile_no, bloodgroup,age,gender, address, city FROM donors";
$result = $mysqli->query($sql);

?>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>


<table   cellspacing="2" cellpadding="2" >

       

        <?php
            if($result->num_rows>0){

                echo " <tr>
                <th>Donor's ID</th>
                <th>Donor's Name</th>
                <th>Mobile Number</th>
                <th>Blood Group </th>
                <th>Donor's Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>City</th>
            </tr>";
                while($row = $result->fetch_assoc()){
        ?>  
        <tr>
            <td><?php echo $row["donor_id"]; ?></td>
            <td><?php echo $row["donor_name"]; ?></td>
            <td><?php echo $row["mobile_no"]; ?></td>
            <td><?php echo $row["bloodgroup"]; ?></td>
            <td><?php echo $row["age"]; ?></td>
            <td><?php echo $row["gender"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["city"]; ?></td>
            <td><a href="delusera.php?donor_id=<?php echo $row["donor_id"] ?>">Delete</a></td>
        </tr>
        
        <?php	
		} 
    	?>
</table>


<?php
    } else{
        echo "0 Results";
    }

$mysqli->close();
?>

