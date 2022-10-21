<!DOCTYPE html>
<html>

<head>
	<title>SmartTeach</title>
	<link rel="stylesheet" type="text/css" href="../style/forgot-password/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="nav-parent">
		<nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #FFFFFF;">
			<div class="pink-on-top"></div>
			<div class="container-fluid">
				<div class="logo-parent">
					<div class="logo-icon"></div>
					<div class="logo-text">
						<h4 class="logo-name">THE NINETEEN</h4>
						<a href="#" class="desc"><h4 class="logo-name desc">Providing solutions for Indonesian education</h4></div></a>
					</div>
				</div>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Online Course</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About Us</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

    <div class="row-1">
        <div class="container">
            <div class="signup-title">
                <h5>Silahkan isi Email dan Username untuk membuat Password baru</h5>
            </div>
            <form>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEmail" placeholder="email@example.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputUsername" placeholder="Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPasswordBaru" class="col-sm-2 col-form-label">Password Baru</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPasswordBaru" placeholder="Password Baru">
                    </div>
                </div>
                <button type="submit" class="btn btn-success submit-btn">Submit</button>
            </form>
        </div>
    </div>

</body>