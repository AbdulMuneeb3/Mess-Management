 <?php
if($_SERVER['REQUEST_METHOD']== "POST"  && isset($_POST['submit'])){
   include "config.php";
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) &&isset($_POST['password'])){

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO user(firstname , lastname, email , password ) VALUES ('$firstname','$lastname','$email','$password')";

   $result=mysqli_query($conn,$sql);
   // $result= $conn->query($sql);

    if($result){

        echo '<script>alert("Entry successful!"); window.location.href = "index1.html";</script>';
    }
    else{
        echo "ERROR Occured";
    }
    

}

}

?>