<?php
if($_SERVER['REQUEST_METHOD']== "POST"  && isset($_POST['submit'])){
   include "config.php";
if(isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['email']) &&isset($_POST['pnumber']) &&isset($_POST['password'])&& isset($_POST['cpassword']) && isset($_POST['gender']) ){

    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pnumber=$_post['pnumber'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO register(fullname , username, email , pnumber ,password , cpassword, gender ) VALUES ('$fullname','$username','$email','$pnumber','$password','$cpassword','$gender')";

   $result=mysqli_query($conn,$sql);
  //  $result= $conn->query($sql);

    if($result){

        echo '<script>alert("Entry successful!"); window.location.href = "index1.html";</script>';
    }
    else{
        echo "ERROR Occured";
    }
    

}

}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> User Registration Form  </title>
    <link rel="stylesheet" href="styles.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Registration Form</div>
    <div class="content">
      <form action="" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required name="fullname">
          </div>
          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" placeholder="Enter your username" required name="username">
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" required name="email">
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" placeholder="Enter your number" required name="pnumber">
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Enter your password" required name="password">
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" placeholder="Confirm your password" required name="cpassword">
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register" name="submit">
        </div>
      </form>
    </div>
  </div>

</body>
</html>