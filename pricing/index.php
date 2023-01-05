<?php 	
	include("../backend/conn.php");
	require_once '../vendor/autoload.php';
	session_start();
	
    $dotenv = Dotenv\Dotenv::createImmutable('../');
	$dotenv->load();

    $clientKey = $_ENV['CLIENT_KEY_MIDTRANS'];
	$email = $_SESSION['email'];
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript"src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key='<?php echo $clientKey; ?>'></script>
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
                        	<a class="nav-link active" aria-current="page" href="../">Home</a>
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
								echo '<li class="nav-text"><a class="nav-link active" href="../backend/logout/logout.php"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a></li><li class="nav-text"><a class="nav-link active" href="../create-modul-ajar">Create Modul</a></li>';
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
				<div class="col-sm-12 col-md-12 col-lg-4 col-free">
					<div class="bord-1">
						<div class="title title-starter">
							<h4>AdminGuru<br/>Basic</h4>
							<h3><s>Rp20.000</s> Rp15.000/Modul <span class="badge text-bg-success">25%</span></h3>
						</div>
						<h4 class="subtitle">Limited</h4>
						<div class="list-category">
							<div class="row">
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Limited download full modul ajar PDF (1x)</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Limited download full modul ajar DOCX (1x)</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Limited edit modul ajar (1x)</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Limited hapus modul ajar (1x)</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited buat modul ajar</h4>
								</div>
							</div>
							
						</div>
						<div class="button-starter">
							<button class="btn  btn-lg btn-starter" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-id="1" onclick="subscribe(this);">BERLANGGANAN</button>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 col-professional">
					<div class="bord-2">
						<div class="title title-professional">
							<h4>AdminGuru<br/>Individual</h4>
							<h3>Rp300.000/Semester</h3>
						</div>
						<h4 class="subtitle">6 months or 1 semester</h4>
						<div class="list-category">
							<div class="row">
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited download full modul ajar PDF</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited download full modul ajar DOCX</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited edit modul ajar</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited hapus modul ajar</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited buat modul ajar</h4>
								</div>
							</div>
						</div>
						<div class="button-professional">
							<button class="btn btn-lg btn-professional" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" data-id="2" onclick="subscribe(this);">BERLANGGANAN</button>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4 col-premium">
					<div class="bord-3">
						<div class="title title-premium">
							<h4>AdminGuru<br/>School</h4>
							<h3>Rp*/Sekolah</h3>
						</div>
						<h4 class="subtitle">Customizable</h4>
						<div class="list-category">
							<div class="row">
							<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited download full modul ajar PDF</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited download full modul ajar DOCX</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited edit modul ajar</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited hapus modul ajar</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Unlimited buat modul ajar</h4>
								</div>
								<div class="col-2">
									<i class="bi bi-check-circle-fill"></i>
								</div>
								<div class="col-10">
									<h4>Training khusus AdminGuru ke sekolah bersangkutan</h4>
								</div>
								<i><span class="ket">*Harga dapat disesuaikan dan order via Whatsapp</span></i>
							</div>
						</div>
						<div class="button-premium">
							<a href="https://wa.me/6283824779390?text=Halo%20saya%20tertarik%20untuk%20berlangganan%20adminGuru%20paket%20sekolah" target="_blank" class="btn  btn-lg btn-professional"><i class="bi bi-whatsapp"></i>&nbsp; BERLANGGANAN</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="btn-pembayaran">
			<a href="../payment" class="btn btn-primary btn-lg btn-daftar">Lihat Pembayaran Anda</a>
		</div>
		<div class="voucher-wrapper">
			<h3> Anda memiliki Voucher?</h3><br/>
			<div class="vouc-code">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Masukkan kode voucher anda" aria-label="Voucher Code" aria-describedby="button-addon2" id="voucherCode">
					<button class="btn btn-redeem" type="button" id="redeem">Redeem</button>
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
							<th scope="col" class="text-center">Qty</th>
							<th scope="col" class="text-end">Amount (Rp)</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td id="productName"></td>
							<td class="text-center"><input type="number" class="qty" id="qty"/></td>
							<td class="text-end"><span id="amount"></span></td>
						</tr>
						<tr>
							<td class="text-center"><b>Total</b></td>
							<td class="text-end" id="totalAmount" colspan="2"></td>
						</tr>
						<tr>
							<td colspan="3" class="align-middle"><h5 class="fw-semibold text-center">Customer Details</h5></td>
						</tr>
						<tr>
							<td>Name</td>
							<td></td>
							<td><input type="text" value="<?php echo $_SESSION['nama']; ?>"class="input-amount" id="name" disabled/></td>
						</tr>
						<tr>
							<td>Email</td>
							<td></td>
							<td><input type="text" value="<?php echo $_SESSION['email']; ?>" class="input-amount" id="email" disabled/></td>
						</tr>
						<tr>
							<td>Phone no</td>
							<td></td>
							<td><input type="tel" class="input-amount" id="phone" placeholder="+62xxxxxxxxxxxx"/></td>
						</tr>
						<tr>
							<td>City</td>
							<td></td>
							<td><input type="text" class="input-amount" id="city"/></td>
						</tr>
						<tr>
							<td>School Name</td>
							<td></td>
							<td><input type="text" class="input-amount" id="schoolName"/></td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="add-cart">
				<button class="btn btn-primary btn-add-cart fw-bold" onclick="addPayment();">ADD TO PAYMENT</button>
			</div>
		</div>	
	</div>

	<div class="toast-container position-fixed bottom-0 start-0 p-3">
	  <div id="showMsg" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-header">
	      <img src="../images/Logo-removebg-preview.png" class="me-2 logo-toast" alt="...">
	      <strong class="me-auto">Admin Guru</strong>
	      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
	    </div>
	    <div class="toast-body" id="msg-toast">
	    </div>
	  </div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="detailsPayment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
		<div class="modal-header">
			<h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-receipt"></i>&nbsp;&nbsp;Detail Pembayaran</h1>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		<table class="table">
			<tbody>
				<tr>
					<th scope="row" class="table-light">Order ID</th>
					<td id="orderId"></td>
				</tr>
				<tr>
					<th scope="row" class="table-light">Product Name</th>
					<td id="detailProductName"></td>
				</tr>
				<tr>
					<th scope="row" class="table-light">Gross Amount</th>
					<td id="grossAmount"></td>
				</tr>
				<tr>
					<th scope="row" class="table-light">Payment Type</th>
					<td id="paymentType"></td>
				</tr>
				<tr>
					<th scope="row" class="table-light">Transaction Time</th>
					<td id="transactionTime"></td>
				</tr>
				<tr>
					<th scope="row" class="table-light">Transaction Status</th>
					<td id="transactionStatus"></td>
				</tr>
				<tr>
					<th scope="row" class="table-light">Status Message</th>
					<td id="statusMessage"></td>
				</tr>
				<tr>
					<th scope="row" class=" text-center" colspan="2">Customer Details</th>
				</tr>
				<tr>
					<th scope="row" class="table-light">Name</th>
					<td id="detailName"></td>
				</tr>
				<tr>
					<th scope="row" class="table-light">Email</th>
					<td id="detailEmail"></td>
				</tr>
				<tr>
					<th scope="row" class="table-light">Phone No</th>
					<td id="detailPhoneNo"></td>
				</tr>
				<tr>
					<th scope="row" class="table-light">City</th>
					<td id="detailCity"></td>
				</tr>
				<tr>
					<th scope="row" class="table-light">School Name</th>
					<td id="detailSchoolName"></td>
				</tr>
			</tbody>
		</table>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		</div>
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