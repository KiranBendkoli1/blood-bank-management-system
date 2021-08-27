<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LMS - Registration </title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Library Management System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mynavbar">
        <ul class="navbar-nav mr-auto"  >
    </ul>
        <form class="form-inline my-2 my-lg-0"><ul class="navbar-nav mr-auto"  >
        <li class="nav-item">
            <a class="nav-link" href="index.php">User Login</a>
            </li>
            <li class="nav-item active">
            <a class="nav-link" href="registration.php">User Registration</a>
            </li>
            <li class="nav-item ">
            <a class="nav-link" href="adminlogin.php">Admin Login</a>
            </li>
        </ul>
        </form>
    </div>
    </nav>
    <div class="container-fluid" style="padding: 80px; background-color: #e3f2fd;height: 100vh;">
        <div class="row">
            <div class="col-lg-6" >
                <p>Library Infor</p>
            </div>
            <div class="col-lg-6"  style="align-items: center;">
                <h1 style="text-align:center">User Registration Form</h1>
                <form action="registration.php" method="POST">

                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" class="form-control" id="fname"> 
                    </div>

                    <div class="form-group">
                        <label for="password">Last Name</label>
                        <input type="text" class="form-control" id="lname"> 
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email"> 
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password"> 
                    </div>

                    <button type="submit" class="btn btn-primary" id="login">login</button>
    
                </form>
            </div>
        </div>
    </div>    


</body>
</html>