<?php
   include("config.php");
    if(isset($_POST["Submit"]))
    {
    	//post all value
    	extract($_POST);
    	$query = "INSERT INTO `users` (`id`, `name`, `age`, `email`) VALUES (NULL, '".$name."', '".$age."', '".$email."');";

    	mysqli_query($connect,$query);
    	header("location:fetch.php");
    }


?>


<html>
<head>
	<title>Add Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container" style="width: 800px; margin-top: 100px;">
		<div class="row">
    <h3>Bagas Makhali | <a href="localhost/crud-simple"> CRUD</a></h3>
    <h4><b style="color: blue;"><a href="http://makhalibagas.me/">makhalibagas.me</a></b></h4><hr>
			<div class="col-sm-6"> 
	  <a href="fetch.php?=data-list" class="btn btn-info">Semua Data</a><br>
	<form action="" method="post" name="form1">
		<div class="form-group">
				<label margin-top: 20px;>Name</label>
				<input type="text" name="name" class="form-control" placeholder="Siapa namamu?">
			
		</div>
			   <div class="form-group">
				<label>Age</label>
				<input type="text" name="age" class="form-control" placeholder="Berapa usiamu?">
			</div>
			 <div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" placeholder="Apa emailmu?">
			  </div>
				<div class="form-group">
				<input type="submit" name="Submit" value="Tambah" class="btn btn-primary btn-block">
			
		
	</form>

</div>
</div>
</div>
</body>
</html>

