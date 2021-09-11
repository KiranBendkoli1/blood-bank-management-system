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
    <title>BloodBank - User Dashboard</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        .card{
            width:12rem;
            margin:15px;
        }


    </style>
</head>
<body>
    <?php require_once 'usernav.php' ;?>

    <div class="container">


        <div class="row">
            <div class="card" style="width: 12rem;">
                <a href="searchbg.php"><img src="img/search.png" alt="" class="card-img-top"></a>
                <a class="btn btn-primary" href="searchbg.php">Search By Blood Group</a>
            </div>
            <div class="card" style="width: 12rem;">
                <a href="joinus.php"><img src="img/blood-donor.png" alt="" class="card-img-top"></a>
                <a class="btn btn-primary" href="joinus.php" >Register As a Donor</a>
            </div>

            <div class="card" style="width: 12rem;">
                <a href="searchcity.php"><img src="img/blood-drop.png" alt="" class="card-img-top"></a>
                <a class="btn btn-primary" href="searchcity.php">Donor Near You</a>
            </div>
        </div>

    </div>
</body>
</html>

<?php
}
else{
    header("location:index.php");
}
?>