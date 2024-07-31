<?php
include_once "inc/db_connect.php";

$query = "SELECT * FROM insert_data WHERE id = 1";
$query2 = "SELECT * FROM insert_data WHERE id = 2";
$query3 =  "SELECT * FROM insert_data WHERE id = 3";
$query4= "SELECT * FROM insert_data WHERE id = 4";
$query5 = "SELECT * FROM insert_data WHERE id = 5";
$query6 = "SELECT * FROM insert_data WHERE id = 6";
$query7 = "SELECT * FROM insert_data WHERE id = 7";
$query8 = "SELECT * FROM insert_data WHERE id = 8";
$query9 = "SELECT * FROM insert_data WHERE id = 9";
$query10 = "SELECT * FROM insert_data WHERE id = 10";
$query11 = "SELECT * FROM insert_data WHERE id = 11";
$query12 = "SELECT * FROM insert_data WHERE id = 12";





$RUNqeury = mysqli_query($conn , $query);
$RUNqeury2 = mysqli_query($conn , $query2);
$RUNqeury3 = mysqli_query($conn , $query3);
$RUNqeury4 = mysqli_query($conn , $query4);
$RUNqeury5 = mysqli_query($conn , $query5);
$RUNqeury6 = mysqli_query($conn , $query6);
$RUNqeury7 = mysqli_query($conn , $query7);
$RUNqeury8 = mysqli_query($conn , $query8);
$RUNqeury9 = mysqli_query($conn , $query9);
$RUNqeury10 = mysqli_query($conn , $query10);
$RUNqeury11 = mysqli_query($conn , $query11);
$RUNqeury12 = mysqli_query($conn , $query12);









$posts = mysqli_fetch_all($RUNqeury , MYSQLI_ASSOC);
$posts2 = mysqli_fetch_all($RUNqeury2 , MYSQLI_ASSOC);
$posts3 = mysqli_fetch_all($RUNqeury3 , MYSQLI_ASSOC);
$posts4 = mysqli_fetch_all($RUNqeury4 , MYSQLI_ASSOC);
$posts5 = mysqli_fetch_all($RUNqeury5 , MYSQLI_ASSOC);
$posts6 = mysqli_fetch_all($RUNqeury6 , MYSQLI_ASSOC);
$posts7 = mysqli_fetch_all($RUNqeury7 , MYSQLI_ASSOC);
$posts8 = mysqli_fetch_all($RUNqeury8 , MYSQLI_ASSOC);
$posts9 = mysqli_fetch_all($RUNqeury9 , MYSQLI_ASSOC);
$posts10 = mysqli_fetch_all($RUNqeury10 , MYSQLI_ASSOC);
$posts11 = mysqli_fetch_all($RUNqeury11 , MYSQLI_ASSOC);
$posts12 = mysqli_fetch_all($RUNqeury12 , MYSQLI_ASSOC);



// echo"<pre>";
// print_r($post);
?>




<h1>About Us</h1>

<div class="">
<div class="">
<?php
include_once "inc/header.php";
?>
<?php foreach($posts as $post) { ?>
  <!-- id 1 -->
  <div class="doctor-cards">
  <div class="doctor-card">
    <h2><?php echo $post['name']   ?></h2>

      <p class="specialty"> <?php echo $post['SPECIALTY']   ?> </p>
      <p class="contact">Phone Number:<a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']?></a></p>
      <a href="doctors_information.php? id=<?php $post['id']?>"  class="contact-btn">Contact Dr</a>
      <div class="rating">★★★★★</div>
      <p class="availability">on</p>
    </div>

<!-- id 2 -->
<?php foreach($posts2 as $post)  ?>


<div class="doctor-card">
  <h2><?php echo $post['name']   ?></h2>
  <p class="specialty"><?php echo $post['SPECIALTY']   ?> </p>
  <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?></a></p>
  <a href="doctors_information.php? id=<?php $post['id']?>"  class="contact-btn">Contact Dr</a>
  <div class="rating">★★★★☆</div>
  <p class="availability">off</p>
</div>
<!-- id 3 -->
<?php foreach($posts3 as $post)  ?>

<div class="doctor-card">
        <h2><?php echo $post['name']   ?></h2>
        <p class="specialty"><?php echo $post['SPECIALTY']   ?> </p> 
        <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?></a></p>
        <a href="doctors_information.php? id=<?php $post['id']?>"  class="contact-btn">Contact Dr</a>
        <div class="rating">★★★★☆</div>
        <p class="availability">on</p>
      </div>
<!-- id 4 -->
<?php foreach($posts4 as $post)  ?>
<div class="doctor-card">
        <h2><?php echo $post['name']   ?></h2>
        <p class="specialty"><?php echo $post['SPECIALTY']   ?> </p>
        <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?> </a></p>
        <a href="doctors_information.php? id=<?php $post['id']?>"  class="contact-btn">Contact Dr</a>
        <div class="rating">★★★★☆</div>
        <p class="availability">off</p>
      </div>

<!-- id 5 -->
<?php foreach($posts5 as $post)  ?>      
<div class="doctor-card">
        <h2><?php echo $post['name']   ?></h2>
        <p class="specialty"> <?php echo $post['SPECIALTY']   ?> </p>
        <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?></a></p>
        <a href="doctors_information.php? id=<?php $post['id']?>"  class="contact-btn">Contact Dr</a>
        <div class="rating">★★★★☆</div>
        <p class="availability">on</p>
      </div>
<!-- id 6 -->
<?php foreach($posts6 as $post)  ?>
<div class="doctor-card">
        <h2><?php echo $post['name']   ?></h2>
        <p class="specialty"><?php echo $post['SPECIALTY']   ?> </p>
        <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?></a></p>
        <a href="doctors_information.php? id=<?php $post['id']?>"  class="contact-btn">Contact Dr</a>
        <div class="rating">★★★★☆</div>
        <p class="availability">on</p>
    </div>
<!-- id 7 -->

<?php foreach($posts7 as $post)  ?>
<div class="doctor-card">
        <h2><?php echo $post['name']   ?></h2>
        <p class="specialty"><?php echo $post['SPECIALTY']   ?> </p>
        <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?></a></p>
        <a href="doctors_information.php? id=<?php $post['id']?>"  class="contact-btn">Contact Dr</a>
        <div class="rating">★★★★☆</div>
        <p class="availability">off</p>
      </div>
<!-- id 8 -->

<?php foreach($posts8 as $post)  ?>

<div class="doctor-card">
        <h2><?php echo $post['name']   ?></h2>
        <p class="specialty"><?php echo $post['SPECIALTY']   ?> </p>
        <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?></a></p>
        <a href="doctors_information.php? id=<?php $post['id']?>"  class="contact-btn">Contact Dr</a>
        <div class="rating">★★★★☆</div>
        <p class="availability">on</p>
      </div>

<!-- id 9  -->
<?php foreach($posts9 as $post)  ?>
<div class="doctor-card">
        <h2><?php echo $post['name']   ?></h2>
        <p class="specialty"><?php echo $post['SPECIALTY']   ?> </p>
        <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?></a></p>
        <a href="doctors_information.php? id=<?php $post['id']?>"  class="contact-btn">Contact Dr</a>
        <div class="rating">★★★★☆</div>
        <p class="availability">off</p>
      </div>
<!-- id 10 -->
<?php foreach($posts10 as $post)  ?>

<div class="doctor-card">
        <h2><?php echo $post['name']   ?></h2>
        <p class="specialty"><?php echo $post['SPECIALTY']   ?> </p>
        <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?></a></p>
        <a href="doctors_information.php? id=<?php $post['id']?>"   class="contact-btn">Contact Dr</a>
        <div class="rating">★★★★☆</div>
        <p class="availability">off</p>
      </div>

<!-- id 11? -->
<?php foreach($posts11 as $post)  ?>

<div class="doctor-card">
        <h2><?php echo $post['name']   ?></h2>
        <p class="specialty"><?php echo $post['SPECIALTY']   ?> </p>
        <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?></a></p>
        <a href="doctors_information.php? id=<?php $post['id']?>"   class="contact-btn">Contact Dr</a>
        <div class="rating">★★★★☆</div>
        <p class="availability">on</p>
      </div>
<!-- id 12? -->
<?php foreach($posts12 as $post)  ?>


<div class="doctor-card">
        <h2><?php echo $post['name']   ?></h2>
        <p class="specialty"> <?php echo $post['SPECIALTY']   ?> </p>
        <p class="contact">Phone Number: <a href="tel:+0123456789" class="contact-link"><?php echo $post['phone_number']   ?></a></p>
        <a href="doctors_information.php? id=<?php $post['id']?>"  class="contact-btn">Contact Dr</a>
        <div class="rating">★★★★☆</div>
        <p class="availability">off</p>
      </div>


<?php }?>



</div>
</div>
</div>

<?php
include_once "inc/footer.php";
?>
















