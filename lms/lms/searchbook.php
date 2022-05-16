<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome | librarymanagement.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">
    <title>Book Shelf</title>
    <script>
        function bookShow(){
        var sBranch=document.getElementById("Branch").value;
        var sSem=document.getElementById("Sem").value;
        switch(sBranch){
            case "Computer":
                switch(sSem){
                    case "1":
                        break;
                    case "2":
                        break;
                    case "3":
                        break;
                    case "4":
                        break;
                    case "5":
                        break;
                    case "6":
                        break;
                    case "7":
                        break;
                    case "8":
                        break;
                }
    
                case "IT":
                switch(sSem){
                    case "1":
                        break;
                    case "2":
                        break;
                    case "3":
                        break;
                    case "4":
                        break;
                    case "5":
                        break;
                    case "6":
                        break;
                    case "7":
                        break;
                    case "8":
                        break;
                }
    
                case "Civil":
                switch(sSem){
                    case "1":
                        break;
                    case "2":
                        break;
                    case "3":
                        break;
                    case "4":
                        break;
                    case "5":
                        break;
                    case "6":
                        break;
                    case "7":
                        break;
                    case "8":
                        break;
                }
    
                case "Mechanical":
                switch(sSem){
                    case "1":
                        break;
                    case "2":
                        break;
                    case "3":
                        break;
                    case "4":
                        break;
                    case "5":
                        break;
                    case "6":
                        break;
                    case "7":
                        break;
                    case "8":
                        break;
                }
        }
    }
    
    </script>
</head>
<body>
    <nav id="lnavbar">
        <div id="logo">
            <img src="logo.png" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item"><a href="userstudent.html">My Dashboard</a></li>
            <li class="item"><a href="searchbook.php">Subscribe a book</a></li>
            <li class="item"><a href="">My books</a></li>
            <!-- <li class="item"><a href="">Payments</a></li> -->
            <li class="item"><a href="login.php"><button class="btn2"></button>Log Out</a></li>
        </ul>
    </nav>
    <section id="dashboard">
    <div class="box center d-secondary">
    <label for="Branch">Select Branch</label>
    <select id="Branch" class="d-secondary">
        <option value="Computer">Computer</option>
        <option value="IT">IT</option>
         <option value="Civil">Civil</option>
         <option value="Mechanical">Mechanical</option>
    </select>
    <label for="Sem">Select Semester </label>
    <select id="Sem" class="d-secondary">
        <option value="1">1</option>
        <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         <option value="6">6</option>
         <option value="7">7</option>
         <option value="8">8</option>
    </select></br>
    <button type="button" name="search" class="btn" onclick="bookShow()">Search</button>
</div>
</section>
<section id="dashboard">
    <div class="box center d-secondary">
    <?php
    $sql = "SELECT bid, bname, photo FROM `11`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {?>
        <div class="bphoto">
        <img src="data:image/jpg;charset=utf8; base64,<?php echo base64_encode($row['photo']); ?>" />
        <?php
        echo $row["bid"]. " - " . $row["bname"]. " " . "<br><br>
        </div>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
    </div>
</section>
    <footer>
        <div class="center">
            Copyright &copy; www.librarymanagement.com. All rights reserved!
        </div>
    </footer>
</body>
</html>