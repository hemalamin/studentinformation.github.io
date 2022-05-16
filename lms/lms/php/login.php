<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    $role = $_POST["role"];
     
    $sql = "Select * from users where username='$username' AND password='$password' AND role='$role'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        if ($role == 'Student'){
          header("location:../htmls/student.html");
        }
        else{
          if ($role == 'Faculty'){
            header("location:userfaculty.html");
          }
          else{
            header("location:admin.html");
          }
        }

    } 
    else{     
        // $showError = "Invalid Credentials";
        echo '<script type ="text/JavaScript">';  
echo 'alert(" You entered wrong username or password ")';  
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
    <title>Log in | studentmanagement.com</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
</head>
<body>
    <nav id="navbar">
        <div id="logo">
            <a href="#home" class="logo"></a><img src="../logo.png">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#about">aboutus</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>
            <li class="item"><a href="../php/login.php"><button class="loginbtn">Log in</button></a></li>
        </ul>
    </nav>

    <div class="bg">
    <div class="login">
<form id="login"action="../lms/login.php" method="post">
        <div class="box center">
            <p class="h-secondary center">Log in</p>
            <label for="role" class="slctrole" >Select Role: </label>
            <select id="role" name="role" class="role">
                <option value="Student">Student</option>
                <option value="Faculty">Faculty</option>
                <option value="Librarian">Admin</option>
            </select>
            <br><br>
            Email ID: <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp"></input><br><br>
            Password: <input type="password" class="form-control" id="password" name="password"></input><br><br><b class="newone">New One!</b><a href="../php/signup.php" class="btn3"> Sign up here</a><br><br>
            <button class="btn">Log in</button>
        </div>
</form>
</div>
</div>
<div class="center">
    Copyright &copy; www.studentmanagement.com. All rights reserved!
</div>
</body>
</html> 