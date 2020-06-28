<?php
require 'connect.php';

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<script src="https://kit.fontawesome.com/89b52aff85.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="theme-color" content="#5f0b0b">
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|PT+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rambla|Signika+Negative&display=swap" rel="stylesheet">
</head>
<body>
		<section id="form">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<header>Note-Pad</header>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<form action="insert.php" method="post">
			<div class="form-group">
				<label for="name">Name:</label>
				<input  name="name" class="form-control" id="name" placeholder="Ex: John Watson">
			</div>
					</div>
					<div class="col-md-6">
			<div class="form-group">
				<label for="title">Title:</label>
				<input name="title" class="form-control" id="title" placeholder="Ex:Things to Do">
			</div>

					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="form-group">
							<label for="Notes">My Notes</label>
							<textarea name="note" class="form-control" id="Notes" rows="3" ></textarea>
						</div>

					</div>
				</div>

				<div class="row">
					<div class="col-md-12 text-center">
           <button class=" btn btn-outline-dark" id="submit" value="insert" type="submit" name="submit">Submit</button>
					</form>

					</div>
				</div>
			</div>
	</section>
<?php
  $select="SELECT * FROM notes_table;";
	$result=mysqli_query($conn,$select);
	$resultcheck=mysqli_num_rows($result);
	if ($resultcheck>0) {
		while ($row=mysqli_fetch_assoc($result)) {

			?>
			      <section id="data">

<div class="jumbotron jumbotron-fluid">


							<div class="container data">
								<div class="row">
									<div class="col-md-6 text-center">
							<label style="color:#5f0b0b;font-size:40px;" class="label"  for="info">Name:</label>
									<p style="color:Black;font-size:30px;"  class="info"><?php echo $row['name']; ?></p>

									</div>
									<div class="col-md-6 text-center">
						<label style="color:#5f0b0b;font-size:40px;" class="label"  for="info">Title:</label>
							<p style="color:Black;font-size:30px;"   class="info"><?php echo $row['title']; ?></p>


									</div>

								</div>
								<div class="row">

								</div>
								<div class="row">
									<div class="col-md-12 text-center">
							<label style="color:#5f0b0b;font-size:40px;" class="label" for="info">Notes:</label>
									<p style="color:Black;font-size:30px;"  class="info"><?php echo  $row['note']; ?></p>

									</div>

								</div>

							</div>
							</div>
			      </section>
						<?php
						      }
						    $result->free();
						    }

						?>

	<script src="main.js"></script>
	<script src="vendor/jquery/jquery.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.js"></script>
	</body>
	</html>
