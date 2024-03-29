<?php 
	require_once '../config-google-api.php';

	session_start();
	if(isset($_SESSION['nama'])){
		header("Location: ../create-modul-ajar");
	}
?>
<!DOCTYPE html>

<html>

<head>
	
	<title>adminguru &centerdot; Login</title>
	<link rel="stylesheet" type="text/css" href="../style/login/style.css?version=1.0">
	<link rel="icon" type="image/x-icon" href="../images/logo.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	<div id="page-container">
		<div id="content-wrap">
			<div class="content">
				<div class="logo-adminguru">
					<div class="logo-1">
						<img class="logo-icon" src="../images/logo-removebg-preview.png" alt="logo">
					</div>
				</div>

				<div class="row-1">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-blank">
                                <img src="../images/woman.png" alt="woman">
                            </div>
							<div class="col-lg-6 col-content">
								<form>
									<div class="logo-parent">
										<div class="logo">
											<a href="../"><img src="../images/login-masuk.png" style="width:80px;height:auto;"></a>
											<h1>Masuk.<br><span class="desc-login">Masuk menggunakan akun anda</span></h1>
										</div>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter your email">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1" style="width: 100%;"><span>Password</span> <a href="../forgot-password"><span class="forgot-password">Forgot password?</span></a></label>
										<input type="password" class="form-control" id="password" placeholder="Password">
									</div>
									<div class="login-button">
										<div class="d-grid gap-2">
											<button class=" btn btn-success" type="button" id="login">Log in</button>
										</div>
										<h4>Atau</h4>
										<div class="d-grid gap-2">
											<a class=" btn btn-google" type="button" id="login" href="<?php echo $client->createAuthUrl(); ?>"><img src="../images/google-icon.png" width="17" height="17" class="google-icon"/>Masuk menggunakan akun google</a>
										</div>
									</div>
								</form>

								<div class="signup-direction">
									<p>New to adminGuru? <span><a href="../signup">Create an account</a></span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="copyright">
			<p>© 2022 by The Nineteen</p>
		</div>
	</footer>

	<div class="toast-container position-fixed bottom-0 end-0 p-3">
	  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-header">
	      <img src="../images/Logo-removebg-preview.png" class="me-2 logo-toast" alt="...">
	      <strong class="me-auto">Admin Guru</strong>
	      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
	    </div>
	    <div class="toast-body">
	      Ada input yang belum diisi. Silahkan isi terlebih dahulu!
	    </div>
	  </div>
	</div> 
    
</body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="../js/login/login.js"></script>
</html>