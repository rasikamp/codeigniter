<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css';  ?>"
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css';  ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="<?php echo base_url().'assets/css/back1.jpg' ; ?>">
<div class="container mb-20">
	<?php
		$msg=$this->session->flashdata('msg');
		if ($msg != ""){
			echo "<div class='alert alert-success'>'.$msg.'</div>";
		}
	?>
	<div class="col-md-6">
		<div class="card">
 			 <div class="card-header">
  			  Register here
  </div>
  
  <form action="<?php echo base_url().'index.php\Auth\register' ; ?>" name="registration" method="post">

  <div class="card-body register">
    <p class="card-text">Please fill your data </p>
  <div class="form-group">
  	<label for="name">First name</label>
  	<input type="text" name="first_name" placeholder="first name" id="first_name" value="<?php echo set_value('first_name');  ?>" class="form-control">
	  <?php  if(form_error('first_name'))
	  {
		  echo "<span style='color:#ff0000'>" .form_error('first_name')."</span>";
	  }
	  ?>
  </div>
  <div class="form-group">
  	<label for="name">Last name</label>
  	<input type="text" name="last_name" placeholder="last name" id="last_name" value="<?php echo set_value('last_name');  ?>" class="form-control">
	  <?php  if(form_error('last_name'))
	  {
		  echo "<span style='color:red'>".form_error('last_name')."</span>";
	  }
	  ?>
  </div>
  <div class="form-group">
  	<label for="name">Email</label>
  	<input type="text" name="email" placeholder="email" id="email" value="<?php echo set_value('email');  ?>" class="form-control">
	  <?php  if(form_error('email'))
	  {
		  echo "<span style='color:red'>".form_error('email')."</span>";
	  }
	  ?>
  </div>
  <div class="form-group">
  	<label for="name">Phone</label>
  	<input type="text" name="phone" placeholder="phone" id="phone" value="<?php echo set_value('phone');  ?>" class="form-control">
	  <?php  if(form_error('phone'))
	  {
		  echo "<span style='color:red'>".form_error('phone')."</span>";
	  }
	  ?>
  </div>
  <div class="form-group">
  	<label for="name">Password</label>
  	<input type="text" name="password" placeholder="password" id="password" value="<?php echo set_value('password');  ?>" class="form-control">
	  <?php  if(form_error('password'))
	  {
		  echo "<span style='color:red'>".form_error('password')."</span>";
	  }
	  ?>
  </div>
  <div class="form-group">
  	<button class="btn btn-block btn-primary">Register Now</button>
  </div>
	  <div class="mt-3">
		  <a href="<?php echo base_url().'index.php/auth/login';  ?>">Already user? Sign in here</a>
	  </div>
  </div>
</form>
</div>
	</div>
</div>


</body>
</html>
