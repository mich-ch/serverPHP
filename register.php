<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="registerc.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="js/registerj.js"></script>
  <style>
  .container-fluid{
    max-width: 1200px;
    margin: auto;
  }
  </style>
</head>
<body>
<!--navbar-->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home.php">UniStud</a>
      </div>
    </div>
  </nav>

<!--register form-->
<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Enter Your Details Here
			</div>
			<div class="panel-body">
				<form action="register.php" name="myform" method="post">
          <?php include('errors.php'); ?>
					<div class="form-group">
						<label for="firstname">First Name *</label>
						<input id="firstname" name="firstname" class="form-control" type="text">
						<span id="error_firstname" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="lastname">Last Name *</label>
						<input id="lastname" name="lastname" class="form-control" type="text" >
						<span id="error_lastname" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="username">Username *</label>
						<input id="username" name="username"  class="form-control" type="text" >
						<span id="error_username" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="password">Password *</label>
						<input type="password" name="password" id="password" class="form-control">
						<span id="error_password" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="gender">Gender</label>
						<select name="gender" id="gender" class="form-control">
							<option selected>Male</option>
							<option>Female</option>
							<option>Other</option>
						</select>
						<span id="error_gender" class="text-danger"></span>
					</div>
          <div class="form-group">
						<label for="age">Age *</label>
						<input id="age" name="age"  class="form-control" type="text" >
						<span id="error_age" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="email">Email *</label>
						<input type="email" id="email" name="email" class="form-control" >
						<span id="error_email" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="disc">Discription</label>
						<textarea id="description" name="description" class="form-control" rows="3"></textarea>
					</div>

					<button id="submit" name="reg_user" type="submit" value="submit" class="btn btn-primary center">Submit</button>

				</form>

			</div>
		</div>
	</div>
</div>
</body>
</html>
