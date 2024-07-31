



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2>list clients </h2>
        <a href="doctors_information.php" class="btn btn-primary">new client</a>
        <br>
        <table class="table">
<thead>
<tr>
<th>id</th>
<th>Email</th>
<th>phone</th>
<th>age</th>
<th>CV</th>



</tr>


</thead>
<tbody>
    <?php
require_once "./inc/db_connect.php";
$newsql = "SELECT * FROM user_data";
$newresult = $conn->query($newsql);
if(!$newresult){
    die("invalid query:" . $conn->error);
}
while($row =$newresult->fetch_assoc()){
    echo "
    <tr>
    <td>$row[id]</td>
    <td>$row[Email]</td>
    <td>$row[phone] </td>
    <td>$row[Age]</td>
    <td>$row[CV]</td>
    <td>
    <a class='btn btn-primary' href='\./edit.php?id=$row[id]'>Edit</a>
    <a class='btn btn-danger' href='./delete.php?id=$row[id]'>Delete</a>
    
    </td>
    
    
    
    </tr>
        
    ";
}

    ?>




</tbody>





        </table>

    </div>
    
</body>
</html>