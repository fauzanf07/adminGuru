<!DOCTYPE html>
<html>
<head>
	<title>Pembuatan Modul Ajar</title>
	<link rel="stylesheet" type="text/css" href="../style/create-modul-ajar/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg sticky-top bg-light">
			<div class="container-fluid">
			    <div>
			    	<div class="logo-icon"></div>
			    	<div class="logo-text">
			    		<h4 class="logo-name">THE NINETEEN</h4>
			    		<a href="#" class="desc"><h4 class="logo-name desc">Providing solutions for Indonesian education</h4></div></a>
			    	</div>
			    </div>
			    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			      <span class="navbar-toggler-icon"></span>
			    </button>
			    <div class="collapse navbar-collapse" id="navbarText"  >
			      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
			        <li class="nav-text" >
			        	<a class="nav-link active" aria-current="page" href="#">Online Courses</a>
			        </li>
			        <li class="nav-text">
			        	<a class="nav-link" href="#"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log In</a>
			        </li>
			        <li class="nav-icon">
			        	<a class="nav-link" href="#"><i class="bi bi-facebook"></i></a>
			        </li>
			        <li class="nav-icon">
			        	<a class="nav-link" href="#"><i class="bi bi-twitter"></i></a>
			        </li>
			        <li class="nav-icon">
			        	<a class="nav-link" href="#"><i class="bi bi-youtube"></i></a>
			        </li>
			      </ul>
			    </div>
			</div>
		</nav>
		<div class="container">
			<div class="row row-profile">
				<div class="col-lg-3">
					<center><img src="../images/avatar.jpg" class="profile-pic" id="profile-pic"></center>
					<h3 class="profile-name">Willy Surya Wardhana, S.Pd.</h3>
					<span class="username">@willysurya</span>
					<div class="info">
						<span class="info-item"><i class="bi bi-person-fill"></i>&nbsp;&nbsp; Level 3 - Explorer</span>
						<span class="info-item"><i class="bi bi-trophy-fill"></i>&nbsp;&nbsp; 10th</span>
						<span class="info-item"><i class="bi bi-diamond-fill"></i>&nbsp;&nbsp; 500 Points</span>
						<span class="info-item"><i class="bi bi-award-fill"></i>&nbsp;&nbsp; 3 Badges</span>
						<span class="info-item"><i class="bi bi-star-fill"></i>&nbsp;&nbsp; 1000 XP</span>
					</div>
				</div>
				<div class="col-lg-9 nav-info-user">
					<nav>
					  <div class="nav nav-tabs" id="nav-tab" role="tablist">
					    <button class="nav-link active" id="nav-feed-tab" data-bs-toggle="tab" data-bs-target="#nav-feed" type="button" role="tab" aria-controls="nav-feed" aria-selected="true"><i class="bi bi-chat-square-text-fill"></i>&nbsp;&nbsp;Feed</button>
					    <button class="nav-link" id="nav-progress-tab" data-bs-toggle="tab" data-bs-target="#nav-progress" type="button" role="tab" aria-controls="nav-progress" aria-selected="false"><i class="bi bi-layers-fill"></i>&nbsp;&nbsp;Progress</button>
					    <button class="nav-link" id="nav-badges-tab" data-bs-toggle="tab" data-bs-target="#nav-badges" type="button" role="tab" aria-controls="nav-badges" aria-selected="false"><i class="bi bi-award-fill"></i>&nbsp;&nbsp;Badges</button>
					  </div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="nav-feed" role="tabpanel" aria-labelledby="nav-feed-tab" tabindex="0">
							<div class="post">
								<div class="top">
									<div class="top-photo">
										<img src= "<?php echo $_SESSION['photo_profile']; ?>" class="avatar">
									</div>
									<div class="top-name">
										<b><span><?php echo $_SESSION['name']; ?></span></b><span>&nbsp;&nbsp;<?php echo $_SESSION['username']; ?></span><br>
										<span>20-08-2022 18:30</span>
									</div>
								</div>
								<div class="content-post">
									<p>I'm so happy that I have earned this badge! I can't wait to see you earn this badge too!</p>
									<center><img src="../images/badges.png" class="badges"></center>
								</div>
							</div>
					  	</div>
					  	<div class="tab-pane fade" id="nav-progress" role="tabpanel" aria-labelledby="nav-progress-tab" tabindex="0">
						  	<div class="card card-progress">
								<h5 class="card-header">Course Progress</h5>
								<div class="card-body">
							    	<h6>Algorithm & Programming</h6>
								    <div class="progress">
									  <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-label="Example with label" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
									</div>
								</div>
							</div>
							<div class="card card-progress">
								<h5 class="card-header">Activity Histories</h5>
								<div class="card-body">
								    <div class="row-custom">
								    	<div class="coloumn-1"><i class="bi bi-arrow-up-circle-fill"></i>&nbsp; Level Up</div>
								    	<div class="coloumn-2">Level up to Level 3 and have become an Explorer</div>
								    </div>
								    <div class="row-custom">
								    	<div class="coloumn-1"><i class="bi bi-star-fill"></i>&nbsp; +500 XP</div>
								    	<div class="coloumn-2">You have finished basic algorithm material</div>
								    </div>
								    <div class="row-custom">
								    	<div class="coloumn-1"><i class="bi bi-award-fill"></i></i>&nbsp; New Badges</div>
								    	<div class="coloumn-2">You have earned Digital Badge System</div>
								    </div>
							  	</div>
							</div>
							<div class="card card-progress">
								<h5 class="card-header">Points Histories</h5>
								<div class="card-body">
								  	<span>Your current points : <b>500 Pts</b></span>
								    <div class="row-custom">
								    	<div class="coloumn-1"><i class="bi bi-diamond-fill"></i>&nbsp; +500 Pts</div>
								    	<div class="coloumn-2">You have finished Assignment 1</div>
								    </div>
							    </div>
							</div>
					  	</div>
					  	<div class="tab-pane fade" id="nav-badges" role="tabpanel" aria-labelledby="nav-badges-tab" tabindex="0">
						  	<div class="card card-badges" style="width: 18rem;">
								<img src="../images/badges.png" class="card-img-top" alt="...">
								<div class="card-body">
									<center><h5 class="card-title">Digital Badge System</h5></center>
								    <center><p class="card-text">COMPLETION BADGES</p></center><br/>
								    <center><p class="card-text">Earned: 14 Feb, 2022 02:30:00</p></center>
								</div>
							</div>
							<div class="card card-badges" style="width: 18rem;">
								<img src="../images/badges.png" class="card-img-top" alt="...">
								<div class="card-body">
									<center><h5 class="card-title">Digital Badge System</h5></center>
								    <center><p class="card-text">COMPLETION BADGES</p></center><br/>
								    <center><p class="card-text">Earned: 14 Feb, 2022 02:30:00</p></center>
								</div>
							</div>
							<div class="card card-badges" style="width: 18rem;">
								<img src="../images/badges.png" class="card-img-top" alt="...">
								<div class="card-body">
									<center><h5 class="card-title">Digital Badge System</h5></center>
								    <center><p class="card-text">COMPLETION BADGES</p></center><br/>
								    <center><p class="card-text">Earned: 14 Feb, 2022 02:30:00</p></center>
								</div>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript" src="js/landing-page/landing-page.js"></script>
</body>
</html>