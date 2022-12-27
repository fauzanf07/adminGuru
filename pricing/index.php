<?php 	
	session_start();

 ?>
<!DOCTYPE html>
<html>

<head>
	<title>Admin Guru</title>
	<link rel="stylesheet" type="text/css" href="../style/pricing/style.css">
	<link rel="icon" type="image/x-icon" href="../images/logo.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.4">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
	<div class="nav-parent">
		<nav class="navbar navbar-expand-lg sticky-top navbar-light">
			<div class="pink-on-top"></div>
			<div class="container-fluid">
				<div class="logo-parent">
					<div class="logo">
						<img class="logo-icon" src="../images/Logo-removebg-preview.png" alt="logo">
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

                <div class="collapse navbar-collapse navbar-right" id="navbarNav">
                    <ul class="navbar-nav">
                        
                    </ul>
                </div>
                
				<div class="collapse navbar-collapse navbar-right" id="navbarNav"  >
					<ul class="navbar-nav mb-2 mb-lg-0 icon-sosmed">
						<li class="nav-item">
                        	<a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        	<a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                        	<a class="nav-link" href="../blog">Blog</a>
                        </li>
						<?php
							if(!isset($_SESSION['nama'])){
								echo '<li class="nav-text"><a class="nav-link active" href="./login"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log In</a></li>';
							}else{
								echo '<li class="nav-text"><a class="nav-link active" href="backend/logout/logout.php"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a></li><li class="nav-text"><a class="nav-link active" href="../create-modul-ajar">Create Modul</a></li>';
							}

						 ?>
						
						<li class="nav-icon icon-sosmed">
							<a class="nav-link icon-sosmed" href="#"><i class="bi bi-facebook"></i></a>
						</li>
						<li class="nav-icon icon-sosmed">
							<a class="nav-link icon-sosmed" href="#"><i class="bi bi-twitter"></i></a>
						</li>
						<li class="nav-icon icon-sosmed">
							<a class="nav-link icon-sosmed" href="#"><i class="bi bi-youtube"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div class="row-1">
		<h1>Buat modul ajar dengan banyak dan unduh sepuasnya</h1>
		<h3>Paket yang Tersedia</h3>
	</div>
	<div class="row-2">
		<div class="container">
			<div class="row">
				<div class="col-4 col-free">
					<div class="bord-1">
						<div class="title title-starter">
							<h4>AdminGuru<br/>Starter</h4>
							<h3>Free</h3>
						</div>
						<h4>Limited</h4>
						<div class="list-category">
							<div class="row">
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>3 Figma and 3 FigJam files</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Unlimited personal files</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Unlimited collaborators</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Plugins, widgets, and templates</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Mobile app</h4>
								</div>
							</div>
							
						</div>
						<div class="button-starter">
							<button class="btn  btn-lg btn-starter" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-id="1" onclick="subscribe(this);">BERLANGGANAN</button>
						</div>
					</div>
				</div>
				<div class="col-4 col-professional">
					<div class="bord-2">
						<div class="title title-professional">
							<h4>AdminGuru<br/>Basic</h4>
							<h3>10$ / month</h3>
						</div>
						<h4>30days or 1 month</h4>
						<div class="list-category">
							<div class="row">
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Unlimited Figma files</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Unlimited version history</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Sharing permissions</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Shared and private projects</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Team libraries</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Audio conversations</h4>
								</div>
							</div>
						</div>
						<div class="button-professional">
							<button class="btn btn-lg btn-professional" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-id="2" onclick="subscribe(this);">BERLANGGANAN</button>
						</div>
					</div>
				</div>
				<div class="col-4 col-premium">
					<div class="bord-3">
						<div class="title title-premium">
							<h4>AdminGuru Professional</h4>
							<h3>10$ / month</h3>
						</div>
						<h4>30days or 1 month</h4>
						<div class="list-category">
							<div class="row">
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Unlimited Figma files</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Unlimited version history</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Sharing permissions</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Shared and private projects</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
									<h4>Team libraries</h4>
								</div>
								<div class="col-1">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-11">
								<h4>Audio conversations</h4>
								</div>
							</div>
						</div>
						<div class="button-premium">
							<button class="btn  btn-lg btn-professional" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-id="3" onclick="subscribe(this);">BERLANGGANAN</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-history">
					<div class="card bord-4">
						<div class="title-card">
							<i class="bi bi-credit-card-2-back-fill"></i>&nbsp;&nbsp;Pembayaran Anda
						</div>
						<div class="card-body">
							<table class="table" id="paymentTable">
								<thead>
									<tr>
										<th scope="col">Product</th>
										<th scope="col">Amount (Rp)</th>
										<th scope="col">Customer Details</th>
										<th scope="col">Payment Status</th>
										<th scope="col">Checkout</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" ><path fill="#a3f0ff" fill-opacity="1" d="M0,224L40,192C80,160,160,96,240,74.7C320,53,400,75,480,117.3C560,160,640,224,720,218.7C800,213,880,139,960,128C1040,117,1120,171,1200,176C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
	</div>
	
	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
		<div class="offcanvas-header">
			<center><h5 class="offcanvas-title" id="offcanvasRightLabel"><i class="bi bi-cart-fill"></i>&nbsp;&nbsp;&nbsp;Shopping Cart</h5></center>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<div class="form-body">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Product</th>
							<th scope="col" class="text-end">Amount (Rp)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td id="productName"></td>
							<td><input type="text" value="" class="input-amount" id="amount" disabled/></td>
						</tr>
						<tr>
							<td class="text-center"><b>Total</b></td>
							<td class="text-end" id="totalAmount"></td>
						</tr>
						<tr>
							<td colspan="2" class="align-middle"><h5 class="fw-semibold text-center">Customer Details</h5></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input type="text" value="<?php echo $_SESSION['nama']; ?>"class="input-amount" id="name" disabled/></td>
						</tr>
						<tr>
							<td>Email</td>
							<td><input type="text" value="<?php echo $_SESSION['email']; ?>" class="input-amount" id="email" disabled/></td>
						</tr>
						<tr>
							<td>Phone no</td>
							<td><input type="text" class="input-amount" id="phone"/></td>
						</tr>
						<tr>
							<td>City</td>
							<td><input type="text" class="input-amount" id="city"/></td>
						</tr>
						<tr>
							<td>School Name</td>
							<td><input type="text" class="input-amount" id="city"/></td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="add-cart">
				<button class="btn btn-primary btn-add-cart fw-bold">ADD TO PAYMENT</button>
			</div>
		</div>	
	</div>
</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="../js/pricing/pricing.js"></script>
</html>