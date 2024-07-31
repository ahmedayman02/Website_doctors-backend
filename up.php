

<?php
// session_start();
// if(isset($_SESSION["user"] )){
//   header("location:Home.php");
//   echo"<div class='alert alert-danger'>should fill all requrieds</div>";

// }

  // if(isset($_SESSION["user"] )){
  //   header("location:login.php");
    
  //   }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="up.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  
<!-- 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> -->
   </head>
    <body>



    <section class="container">



    <?php



include_once "./inc/db_connect.php";


  if(isset($_POST['submit']))
  {

    $Email =  $_POST['Email'];
  $userName =   $_POST['userName'];
  $usercountry =  $_POST['Usercountry'];
  $Password =   $_POST['UserPassword'];
  $passwordhashh  = password_hash($Password , PASSWORD_DEFAULT);

  $userphone = $_POST['UserPhone']; 
  $brith_Data = $_POST['Birth_Data'];




if($_SERVER["REQUEST_METHOD"]=="POST"){
$errors = array();
if(empty($userName) OR empty($usercountry) OR empty($Password) or empty($Email) or empty($userphone) or empty($brith_Data) ){
  array_push($errors , "All fields is requried");
}

if(!filter_var($Email , FILTER_VALIDATE_EMAIL)){
array_push($errors ,"Email is not valid");
      }

      if(strlen($Password) < 8 ){

        array_push($errors , "At least 8 digits");
       }


       if(strlen($userphone) < 11 ){
        array_push($errors , "At least 11 digits");
              
            }


            
          }

$sql = "SELECT * FROM sign_up WHERE UserEmail = '$Email'";
$result = mysqli_query($conn , $sql);
$RUNqeury =mysqli_num_rows($result);

if($RUNqeury>0){
  array_push($errors , "email is already exist");

}

  if(count ($errors) > 0){
  foreach($errors as $error){
    echo "<div class='alert alert-danger'>$error</div>";
  }


}else{
$sql = "INSERT INTO sign_up (userName, Usercountry,UserPassword, UserEmail, UserPhone, Birth_Data) VALUES (?, ?, ?, ?, ?, ?)";

$stmt=mysqli_stmt_init($conn);
$preparestmt = mysqli_stmt_prepare($stmt,$sql);
if($preparestmt){
  mysqli_stmt_bind_param($stmt,"ssssss", $userName, $usercountry, $passwordhashh, $Email, $userphone, $brith_Data);
  mysqli_stmt_execute($stmt);
echo "<div class='alert alert-success'>You registered successfully</div>";
if (empty($errors)) {
  // Redirect to the next page
  header("Location:login.php");
  exit;
}


}else{

  die("something went wrong");
}
}


  }


?>



      <h1>Registration Form</h1>




      <form action="" class="form" method="post" >
       <div class="input-box">
        
          <input type="text"  name="userName"  placeholder="Enter your Name">

       </div>
       
       <div class="input-box">
         
          <input type="text"  name="Usercountry"  placeholder=" Enter your Country"> 
       </div>

       <div class="input-box">
           
        <input type="password" name="UserPassword" placeholder="Enter your password">


       </div>


       <div class="input-box">
         
        <input type="number" name="UserPhone" placeholder="Enter your Phone">
       </div>
        
       <div class="input-box">
         
        <input type="email" name="Email" placeholder="Enter your email address">
       </div>

       <div class="input-box">
         
        <input type="date" name="Birth_Data"  placeholder="Enter your Birth date">
          <br>
          <br>
       </div>
           
         <br>
             
           
            <select name="gander" id="gender">
            <option value="saab">Male</option>
            <option value="volvo">Female</option>

            </select>

          <br>
          <br>
          
          
          <button style="width: 32%; margin-left: 193px;" type="btn" name="submit" class="sign-btn">Sign Up</button>
    <a href="login.php" class="float-end mt-4 ">Already have an account? Sign in</a>
          </div> 

        </form>
        </section>

        </body>
         </html>