<?php

	include '../blog/blog.php';
	$blog=new Blog();
	$result='';
	$loginresult='';
	$id=$_GET['id'];
	$result=$blog->viewprofile1($id);
	$blogs=mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="navbar navbar-expand-md navbar-dark sticky-top bg-dark">
			<div class="container">
				<div>
					<a href="" class="navbar-brand text-warning">
						ANWARA UNION COUNCIL
					</a>
					
				</div>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#my-nav">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="my-nav">
					<ul class="navbar-nav ml-auto">
						<li class=""><a href="../homeaftersignin/homeaftersignin.php?id=<?php echo $id ?>" class="nav-link" style="font-size: 20px;">HOME</a></li>
						
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">SERVICES</a>
							<div class="dropdown-menu bg-grey " style="background-color: grey;">
								<a href="../serviceeducation/serviceeducation.php?id=<?php echo $id ?>" class="dropdown-item text-warning">EDUCATION</a>
								<a href="../service.healthcare/service.healthcare.php?id=<?php echo $id ?>" class="dropdown-item text-warning">HEALTH CARE</a>
								<a href="../service.streetlighting/service.streetlighting.php?id=<?php echo $id ?>" class="dropdown-item text-warning">STREET LIGHTING</a>
								<a href="../service.certificateissue/service.certificateissue.php?id=<?php echo $id ?>" class="dropdown-item text-warning">CERTIFICATE ISSUE</a>
								<a href="../service.tax/service.tax.php?id=<?php echo $id ?>" class="dropdown-item text-warning">TAX</a>
							</div>
							
						</li>
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">ABOUT</a>
							<div class="dropdown-menu bg-grey" style="background-color: grey;">
								<a href="../about.chairmenscorner/about.chairmenscorner.php?id=<?php echo $id ?>" class="dropdown-item text-warning">CHAIRMENS CORNER</a>
								<a href="../about.history/about.history.php?id=<?php echo $id ?>" class="dropdown-item text-warning">HISTORY</a>
								<a href="../about.unionrole/about.unionrole.php?id=<?php echo $id ?>" class="dropdown-item text-warning">UNION ROLE</a>
								<a href="../about.adminastrativerole/about.adminastrativerole.php?id=<?php echo $id ?>" class="dropdown-item text-warning">ADMINASTRATIVE SET UP</a>
								<a href="../about.wardreview/about.wardreview.php?id=<?php echo $id ?>" class="dropdown-item text-warning">WARD REVIEW</a>
								<a href="../about.activities/about.activities.php?id=<?php echo $id ?>" class="dropdown-item text-warning">ACTIVITIES</a>
							</div>
							
						</li>
						
						<li class="dropdown">
							<a href="" class=" nav-link dropdown-toggle" data-toggle="dropdown"  style="font-size: 20px;">PROJECTS</a>
							<div class="dropdown-menu" style="background-color: grey;">
								<a href="../projects.ongoing/projects.ongoing.php?id=<?php echo $id ?>" class="dropdown-item text-warning">ON GOING PROJECTS</a>
								<a href="../projects.upcoming/projects.upcoming.php?id=<?php echo $id ?>" class="dropdown-item text-warning">UP COMING PROJECTS</a>
							</div>
							
						</li>

						<li><a href="../profile/profile.php?id=<?php echo $id ?>" class="nav-link" style="font-size: 20px;" >PROFILE</a></li>
						<li><a href="../home/home.php" class="nav-link" style="font-size: 20px;" >LOG OUT</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		
		<div class="container">
			<div class="row">
				
				<table class="mt-4 mb-4 ml-3">
					<tr>
						<th width="200">First Name :</th>
						<td width="400"><?php echo $blogs['firstname'] ?></td>
					</tr>
					<tr>
						<th width="200">Last Name :</th>
						<td width="400"><?php echo $blogs['lastname'] ?></td>
					</tr>
					<tr>
						<th width="200">Email :</th>
						<td width="400"><?php echo $blogs['email'] ?></td>
					</tr>
					<tr>
						<th width="200">Contact :</th>
						<td width="400"><?php echo $blogs['contact'] ?></td>
					</tr>
					<tr>
						<th width="200">Address :</th>
						<td width="400"><?php echo $blogs['address'] ?></td>
					</tr>
					<tr>
						<th width="200">Image :</th>
						<td width="400"><img src="<?php echo $blogs['image'] ?>" alt="" width="100" height="100"></td>
					</tr>
					<tr>
						<th width="200">Userame :</th>
						<td width="400"><?php echo $blogs['username'] ?></td>
					</tr>
					<tr>
						<th width="200">Password :</th>
						<td width="400"><?php echo $blogs['password'] ?></td>
					</tr>
				</table>
				
			</div>
		</div>
		<div class="container">
			<a href="../editprofile/editprofile.php?id=<?php echo $blogs['id'] ?>" class="btn btn-primary">Edit Profile</a>
		</div>
		

		<div class="navbar navbar-expand-md navbar-dark bg-dark justify-center fixed-bottom">
			<div class="mx-auto">
				<div class="ml-5">
					<a href="" class="text-white mr-6">About Us  </a>
				</div>
				<div>
					<h6 style="color: orange;">Copyright All right @ Le Cafe 2020</h6>
				</div>
				
			</div>
		</div>
		

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>