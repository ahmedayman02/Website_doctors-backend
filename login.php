<?php
session_start();
if(isset($_SESSION["user"] )){
  header("location:Home.php");
  echo"<div class='alert alert-danger'>should fill all requrieds</div>";

}



?>



<html>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  

       </head>
       <body>
        <section class="container">

<?php
require_once "./inc/db_connect.php";
if(isset($_POST['applynow'])){

  $Email = $_POST["Email"];
  $password = $_POST["password"];
  if($_SERVER["REQUEST_METHOD"]=="POST"){
    $errors = array();
    if(empty($password) or empty($Email)  ){
      array_push($errors , "All fields is requried");
    }
    
    if(!filter_var($Email , FILTER_VALIDATE_EMAIL)){
    array_push($errors ,"Email is not valid");
          }
    
          if(strlen($password) < 8 ){
    
            array_push($errors , "At least 8 digits");
           }
           
           if(count ($errors) > 0){
            foreach($errors as $error){
              echo "<div class='alert alert-danger'>$error</div>";
            }
          }
          
            
                }
    
    
         
    

  $sql = "SELECT * FROM sign_up WHERE UserEmail = '$Email'";
  $result = mysqli_query($conn,$sql);
  $users =     mysqli_fetch_array($result ,MYSQLI_ASSOC);
  if($users){
    if(password_verify($password,$users["UserPassword"])){
      $_SESSION["user"] = "yes";
      header("location:Home.php");
      die();
    }else{
      echo "<div class='alert alert-danger'> password deosnot match </div>";
    }

  }else{
    echo "<div class='alert alert-danger'>Email doesnot match </div>";
  }




}



?>


            <h1>Login</h1>
            <form action="#" class="form" method="post"> 
             <div class="input-box">
              
                <input type="email"  name="Email"  placeholder="Enter your Email">   
                 </div>
                 <br>
                 
             
               <div class="input-box">
               
                <input type="password" name="password"   placeholder=" Enter your Password">    
                </div>
                <br>
                <br>


             <button type="btn" name="applynow" class="Login-btn" style="font-size: 19px; padding-top: 8px; width: 25%;margin-left: 125px; " >Login</button>
             <a href="up.php" class="float-end mx-4 mt-3">create new account</a>
             </div>

         </section>
            </form>
          </body>
          </html>  
    