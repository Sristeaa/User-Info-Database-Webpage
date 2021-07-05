<?php 
//including the database connection file
include_once ("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Home</title>
	<style>
        body{
            background-color: rgb(242, 192, 255);
        }

    </style>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">CRUD</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
				<a class="nav-link" href="add.html">Add Data<span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container my-5">
		<table class="table table-striped" width='25%' border=0>
			<tr bgcolor='#CCCCCC'>
				<th>Name</th>
				<th>Age</th>
				<th>Email</th>
				<th>Action</th>
			</tr>
			<?php

			while($res = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>" .$res['name']."</td>";
				echo "<td>" .$res['age']."</td>";
				echo "<td>" .$res['email']."</td>";
				echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			}
			?>

		</table>
	</div>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>	

