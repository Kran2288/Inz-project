<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="/style/style.css">
    <title>Inz-project</title>
</head>
<body>
<?php
    require_once 'include/db.php';
  ?> 
<header>
  <div class="row header">
    <div class="col-sm-3">.col-sm-4</div>
    <div class="col-sm-8">.col-sm-8</div>
  </div>
</header>
<table>
  <tr>
    <th>ID</th>
    <th>Title</th>
    <th>Description</th>
  </tr>
  <?php
    $news_name = mysqli_query($mysql, query:"")
  ?>
  <tr>
    <th>1</th>
    <th>News-1</th>
    <th>Lorem ipsum dolor sit amet.</th>
  </tr>
 
</table>

 
</body>
</html>