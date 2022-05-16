<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../partials/_dbconnect.php';
    $role = $_POST["role"];
    $sno = $_POST["sno"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `sno`,`username`, `password`, `role`, `dt`) VALUES ('$sno','$username', '$password', '$role', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Signed up successfully")';  
            echo '</script>';
        }
        header("location:login.php");
    }
    else{
        echo '<script type ="text/JavaScript">';  
echo 'alert(" Password mismatched please enter same password")';  
echo '</script>';
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up | librarymanagement.com</title>
    <link rel="stylesheet" href="../css/signup.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <script language="javascript">
        function myFunction() {
            window.location
        }
    </script>
</head>

<body>
    <div class="signupimg">
    <nav id="navbar">
        <div id="logo">
            <a href="#home" class="logo"></a><img src="../logo.png">
        </div>
        <ul>
            <li class="item"><a href="./index.html">Home</a></li>
            <li class="item"><a href="./index.html">aboutus</a></li>
            <li class="item"><a href="./index.html">Contact Us</a></li>
            <li class="item"><a href="../php/login.php"><button class="loginbtn">Log in</button></a></li>
        </ul>
    </nav>

    <form id="login" method="post">
        <div class="box center">
            <p class="h-secondary center">Sign up<br></p>
            <br>
            <label for="role">Select Role: </label>
            <select id="role" name="role">
                <option value="Student">Student</option>
                <option value="Faculty">Faculty</option>
                <option value="Librarian">Admin</option>
            </select>
            <br>
            <h2 class="dummy">ID No.: <input type="int" class="form-control1" id="sno" name="sno"></input></h2><br>
            <h2 class="dummy">Email ID: <input type="text" class="form-control1" id="username" name="username" aria-describedby="emailHelp"></input></h2><br>
            <h2 class="dummy">Password: <input type="password" class="form-control1" id="password" name="password"></input></h2><br>
            <h2 class="dummy">Confirm Password: <input type="password" class="form-control1" id="cpassword" name="cpassword"></input></h2>
            <br><br>
            <button onclick="login.php" class="btn">Sign up</button>
            <br><br>
            <h3 class="allready newone">Already have an account?</h3><h3 class="allready"><a href="../php/signup.php" class="btn3">Sign in here</h3></a>
        </div>
</form>
</div>
<div class="center footer">
    Copyright &copy; www.studentmanagement.com. All rights reserved!
</div>
</body>
</html>