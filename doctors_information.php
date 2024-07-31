


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="s.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>



<div class="profile-container">

<?php
require_once "./inc/db_connect.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $Email = $_POST['Email'];
    $phone = $_POST['phone'];
    $Age = $_POST['age'];
    $cv = $_POST['CV'];







            $errors = array();
            if(empty($name) OR empty($Email) OR empty($phone) or empty($Age) or empty($cv)  ){
              array_push($errors , "All fields is requried");
            }
            
            if(!filter_var($Email , FILTER_VALIDATE_EMAIL)){
            array_push($errors ,"Email is not valid");
                  }
       
            
                    if(strlen($phone) < 11 ){
                    array_push($errors , "At least 11 digits");
                          
                        }
         
                        
                    
   
$mysql = "SELECT * FROM user_data WHERE Email = '$Email' ";
$myresult = mysqli_query($conn , $mysql);
$RUNmyqeury = mysqli_num_rows($myresult);
if($RUNmyqeury > 0 ){
    array_push($errors , "email is already exist");
}

    
                        if(count ($errors) > 0){
                            foreach($errors as $error){
                              echo "<div class='alert alert-danger'>$error</div>";
                            }
    



   }else{
$mysql = "INSERT INTO user_data (name,Email,phone,Age,CV) VALUES (?,?,?,?,?)";
$mystmt=mysqli_stmt_init($conn);
$mypreparestmt = mysqli_stmt_prepare($mystmt,$mysql);
if($mypreparestmt){
  mysqli_stmt_bind_param($mystmt,"sssss", $name, $Email, $phone, $Age, $cv);
  mysqli_stmt_execute($mystmt);
echo "<div class='alert alert-success'>You registered successfully</div>";



}





if(!$myresult){
    $error = "invalide query:" . $conn->error;
    exit;
}else{
    echo "client added correctly";
    header("location:information_data.php");
    exit;
}

}   
  
            
    }        

?>


        <form method="POST" action="">
        
        <div class="profile-details">
            <div class="detail-item">
                <label for="name">Name:</label>
                <input type="text" id="name" class="profile-name-input" name="name" value="" >
            </div>

            <div class="detail-item">
                <label for="email">Email:</label>
                <input type="email" id="email" class="profile-email" name="Email" value="" >
            </div>

            <div class="detail-item">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" class="profile-phone" name="phone" value="" >
            </div>

            <div class="detail-item">
                <label for="age">Age:</label>
                <input type="text" id="age" class="profile-age-input" name="age" value="" >
            </div>

            <div class="detail-item">
                <label for="cv">CV:</label>
                <textarea id="cv" class="profile-cv" name="CV">


                </textarea>
            </div>
            <div class="row mb-2">
<div class="offest-sm-3 col-sm-3 d-grid">
<button type="submit" name="submit" class="btn btn-primary" >submit</button>
</div>
<div class="offest-sm-3 col-sm-3 d-grid">
<a type="submit" class="btn btn-outline-primary" href="information_data.php" >cancel</a>
</div>
        </div>

         </div>
    



                 </form>

<!-- 
</div>

        <div class="profile-actions">
            <button name="edit" class="edit-profile-btn">Edit Profile</button>
            <button name="save" class="save-profile-btn">Save Changes</button>
            <button class="logout-btn">Logout</button>
        </div> -->


    </div> 

    <script src="m.js"></script>

    </body>

</html>
