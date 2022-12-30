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
	<link rel="stylesheet" type="text/css" href="../style/payment/style.css">
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
                            <a class="nav-link icon-sosmed" href="../pricing"><i class="bi bi-cart-fill"></i></a>
                        </li>
                        <li class="nav-icon icon-sosmed">
                            <a class="nav-link icon-sosmed" href="#"><i class="bi bi-facebook"></i></a>
                        </li>
                        <li class="nav-icon icon-sosmed">
                            <a class="nav-link icon-sosmed" href="#"><i class="bi bi-twitter"></i></a>
                        </li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div class="row-1">
		<div class="container">
			<div class="row">
				<div class="col col-sm-12 col-md-12 col-lg-12 col-history">
					<div class="card bord-4">
						<div class="title-card">
							<i class="bi bi-credit-card-2-back-fill"></i>&nbsp;&nbsp;Pembayaran Anda
						</div>
						<div class="card-body">
							<table class="table" id="paymentTable">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Date</th>
										<th scope="col">Product</th>
										<th scope="col">Qty</th>
										<th scope="col">Amount (Rp)</th>
										<th scope="col">Total Amount (Rp)</th>
										<th scope="col">Customer Details</th>
										<th scope="col">Payment Status</th>
										<th scope="col">Action</th>
									</tr>
								</thead>
								<tbody id="data-payment">
									<?php
							        		$sql = "SELECT * FROM payment_history WHERE email = '$email' AND is_deleted='0' ORDER BY created_at DESC";
							        		$result = mysqli_query($con, $sql);
							        		$i=1;
											while($r = mysqli_fetch_assoc($result)){
												echo "
													<tr>
													<td>".$i."</td>
													<td>".$r['created_at']."</td>
													<td>".$r['product_name']."</td>
													<td>".$r['qty']."</td>
													<td>".$r['amount']."</td>
													<td>".$r['qty']*$r['amount']."</td>
													<td>
														<span>".$r['name']."</span><br/>
														<span>".$r['email']."</span><br/>
														<span>".$r['phone_no']."</span><br/>
														<span>".$r['city']."</span><br/>
														<span>".$r['school_name']."</span>		
													</td>
													<td id='status-payment".$r['id']."'>";
													switch($r['pay_status']){
														case 0:
															echo "<span class='badge text-bg-primary'>Waiting</span>";
															break;
														case 1:
															echo "<span class='badge text-bg-warning'>Pending</span>";
															break;
														case 2:
															echo "<span class='badge text-bg-success'>Success</span>";
															break;
														case 3:
															echo "<span class='badge text-bg-danger'>Failed</span>";
															break;
													}	
													echo "	
													</td>
													<td>";
														if($r['pay_status']==2){
															echo "<button class='btn btn-success mt-2 btn-payment' data-id='".$r['id']."' data-order='".$r['order_id']."'  onclick='getDetailsTrans(this);'>Details</button><br/>";
														}else{
															echo "<button class='btn btn-primary btn-payment' data-id='".$r['id']."' onclick='checkout(this);'>Checkout</button><br/>";
															echo "<button class='btn btn-info mt-2 btn-payment text-white' data-id='".$r['id']."' data-order='".$r['order_id']."' onclick='getUpdateStatus(this);'><i class='bi bi-arrow-clockwise'/></i>&nbsp;&nbsp;Status</button><br/>";
														}
													echo "
														<button class='btn btn-danger mt-2 btn-payment' data-id='".$r['id']."' onclick='deletePayment(this);'>Delete</button>
													</td>
												</tr>
												";
												$i++;
											}
							        	?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" ><path fill="#a3f0ff" fill-opacity="1" d="M0,224L40,192C80,160,160,96,240,74.7C320,53,400,75,480,117.3C560,160,640,224,720,218.7C800,213,880,139,960,128C1040,117,1120,171,1200,176C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
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
							<td class="text-end"><span id="amount"></span></td>
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
							<td><input type="tel" class="input-amount" id="phone" placeholder="+62xxxxxxxxxxxx"/></td>
						</tr>
						<tr>
							<td>City</td>
							<td><input type="text" class="input-amount" id="city"/></td>
						</tr>
						<tr>
							<td>School Name</td>
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
	<script type="text/javascript" src="../js/payment/payment.js"></script>
</html>