
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/style/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <title>Inz-project</title>
</head>
<body>
<?php
    require_once 'include/db.php';

    $result = mysqli_query($connect, "SELECT * FROM `social_networks`");
    
  ?> 
  <? include "inc/header.php" ?>

<!-- <header>
  <div class="row header">
    <div class="col-sm-3">.col-sm-4</div>
    <div class="col-sm-8">.col-sm-8</div>
  </div>
</header> -->


<!-- <table>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
  </tr>
  
  <tr>
    <th>1</th>
    <th>News-1</th>
    <th>Lorem ipsum dolor sit amet.</th>
  </tr>
 
</table> -->


<? include "inc/footer.php" ?>
<script src="https://kit.fontawesome.com/4e625ca82e.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</body>
</html>