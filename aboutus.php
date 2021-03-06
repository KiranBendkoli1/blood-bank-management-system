<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank - About us</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <nav class="navbar mynavbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">BloodBank Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav mr-auto"  >
        </ul>
            <form class="form-inline my-2 my-lg-0"><ul class="navbar-nav mr-auto"  >
                <li class="nav-item ">
                <a class="nav-link" href="userdashboard.php">Home</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="aboutus.php">About us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="ourmembers.php">Our Members</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="joinus.php">Join Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="userstock.php">Make Request</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
            </form>
        </div>
    </nav>
    <div class="container">
        <div class="col justify-content-center">
            <h1>About Us</h1>
            <p>We are a non-profitable organization which aims to provide a better and easier way to find the required blood needed at the time</p>
        </div>
    </div>
    <?php require_once "footer.php"?>
</body>
</html>