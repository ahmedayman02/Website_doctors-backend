<?php
session_start();
if(!isset($_SESSION["user"] )){
header("location:login.php");

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="./css/all.css">
        <link rel="stylesheet" href="./foot.css"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>




<header class="header">
<div class="Logo">
    <a href="/ghhj.html">
        <img src="./photo/700.png" alt="Logo" width="80" height="90" class="Logo"> 
         </a>      
        </div>
      
     
     </div>
   
    <nav class="navbar">
        <a href="./Home.html">Home</a>
        <a href="./About us.html">About us</a>
        <a href="./Server.html">Servicer</a>
        <a href="./Courses.html">Courses</a>
    <a href="/statistics.html">statistics</a>
    <a href="/Team.html">Team</a>
    <a href="/Contact.html">Contact</a>
    <a href="/Footer.html">Footer</a>
    </nav>
    <a href="logout.php" class="btn btn-warning" > logout</a>
    <!-- <a class="sss" href="./Sign in.html">Sign in</a>
    <a class="sss" href="./Sign up.html">Sign up</a>
     -->
   
          


    </header>
    
       
    
    <section class="Home">
        <div class="Home-content">
            <h1>First aid </h1>
        <p>is the first and immediate assistance given to any person with either a minor or serious illness or injury,<br>
             with care provided to preserve life,</p>
        <a class="detel" href="#">Server</a>
        </div>
        <div class="images">
            <img src="./photo/Picture1.png" class="girl">
        </div>
        </section> 
        <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>                         
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.0/dist/chart.min.js"></script>                                      
<script src="main2.js"></script>
    <script src="main.js"></script>
</body>
</html>