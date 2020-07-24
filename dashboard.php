<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body background="<?php echo base_url().'assets/css/back1.jpg' ; ?>">
<div class="container">
<!--<nav class="navbar navbar-expand-lg navbar-light bg-light">-->
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="<?php echo base_url().'index.php/auth/logout';  ?>">Logout</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
			<div class="col-md-6 text-right text-white">Welcome,</div>

</nav>

<p style="text-align: center; font-family: 'Berlin Sans FB Demi'; color: crimson; font-size: 150px"  >Medico</p>
<p style="text-align:center;font-family: Tisa; color: darkred">We care about your safety</p>
<p style="text-align: left;font-family: 'Franklin Gothic Heavy'; font-size: 25px">In 2020, Covid-19 is spreding on large scale.Safety is first concern.Hence, alongside other preventive measures, wearing a face mask may help slow the spread of COVID-19. Different types of mask are available for people to wear during the current pandemic.</p>
<marquee>We will provide you the masks at home.Stay informed!!</marquee>


</div>
<div class="card-group">
	<div class="card">
		<img src="<?php echo base_url().'assets/css/m1.jpg' ; ?>" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Surgical Mask</h5>
			<p class="card-text">A surgical face mask is a form of personal protective equipment (PPE) that generally fits loosely over the nose and mouth. These masks shield against large cough or sneeze droplets, splashes, or sprays, but they cannot protect against smaller droplets.</p>
			<p class="card-text"><small class="text-muted"></small></p>
		</div>
	</div>
	<div class="card">
		<img src="<?php echo base_url().'assets/css/m2.jpg' ; ?>" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">N95</h5>
			<p class="card-text">Seal-tested respirator masks include the N95 and other FFP2/3 forms.

				These masks have tangled fibers to filter pathogens in the air, and they fit very close to the face. The edges form a seal around the mouth and nose.
			<p class="card-text"><small class="text-muted"></small></p>
		</div>
	</div>
	<div class="card">
		<img src="<?php echo base_url().'assets/css/m3.jpg' ; ?>" class="card-img-top" alt="...">
		<div class="card-body">
			<h5 class="card-title">Cloth face covering</h5>
			<p class="card-text">The CDC have created a video providing guidance on how to make a cloth face covering.

				People can make these masks using a variety of fabrics and items of clothing, including scarves, bandanas, T-shirts, and pillowcases. A tightly woven cotton fabric is most suitable.</p>
			<p class="card-text"><small class="text-muted"></small></p>
		</div>
	</div>
</div>

</body>
</html>
