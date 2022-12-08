<?php 	
    include("../backend/conn.php");
	session_start();
	if(isset($_SESSION['nama'])){
		header("Location: ../create-modul-ajar");
	}else{
        $sess = mysqli_real_escape_string($con,$_GET['sess']);
        $query = "SELECT * FROM reset_password WHERE sess='$sess'";
        $result = mysqli_query($con,$query);
        $numRows = mysqli_num_rows($result);
        if($numRows==0){
            header("Location: ../forgot-password");
        }else{
            $row = mysqli_fetch_assoc($result);
        }
    }
?>
<!DOCTYPE html>
<html>

<head>
	<title>adminguru &centerdot; Forgot Password</title>
	<link rel="stylesheet" type="text/css" href="../style/reset-password/style.css">
	<link rel="icon" type="image/x-icon" href="../images/logo.ico">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="nav-parent">
		<nav class="navbar navbar-expand-lg sticky-top navbar-light">
			<div class="pink-on-top"></div>
			<div class="container-fluid">
				<div class="logo-parent">
					<div class="logo">
						<img class="logo-icon" src="../images/logo-removebg-preview.png" alt="logo">
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

                
                
				<div class="collapse navbar-collapse navbar-right" id="navbarNav"  >
					<ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="../blog">Blog</a>
                        </li>
                    </ul>
					<ul class="navbar-nav mb-2 mb-lg-0 icon-sosmed">
						<?php
							if(!isset($_SESSION['nama'])){
								echo '<li class="nav-text"><a class="nav-link active" href="../login"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log In</a></li>';
							}else{
								echo '<li class="nav-text"><a class="nav-link active" href="backend/logout/logout.php"><i class="bi bi-person-circle"></i>&nbsp;&nbsp;Log Out</a></li><li class="nav-text"><a class="nav-link active" href="./create-modul-ajar">Create Modul</a></li>';
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

    <div class="row-1" id="emailForm">
        <div class="container">
            <div class="signup-title">
                <center><h5><span style="font-size:50px;"><i class="bi bi-lock-fill"></i></span><br/>Silahkan masukan kata sandi baru anda</h5></center>
            </div>
            <form method="POST" id="form">
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-4 col-form-label">Password Baru</label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputPassword" placeholder="Password Baru" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-4 col-form-label">Konfirmasi Password</label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Konfirmasi Password" required="required">
                    </div>
                </div>
                <input type="email" class="form-control" id="inputEmail" value="<?php echo $row['email']; ?>"  required="required" hidden>
				<div class="submit-btn">
					<center><button type="button" class="btn btn-success" id="submit">Submit</button></center>
				</div>
            </form>
        </div>
    </div>

	<footer>
		<div class="copyright">
			<p>© 2022 by The Nineteen</p>
		</div>
		<div class="background-footer"></div>
	</footer>

	<div class="toast-container position-fixed bottom-0 end-0 p-3" id="toast">
	  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-header">
	      <img src="../images/Logo-removebg-preview.png" class="me-2 logo-toast" alt="...">
	      <strong class="me-auto">Admin Guru</strong>
	      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
	    </div>
	    <div class="toast-body" id="toastBody">
	    </div>
	  </div>
	</div>

</body>
<script type="text/javascript" src="../js/reset-password/reset-password.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</html>