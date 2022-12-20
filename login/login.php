<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Kantin Rawr</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>

<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="..\img\main.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title"style="text-align: center;">Login</h4>
							<form method="POST" class="my-login-validation" novalidate="">
								<div class="form-group">
									<label for="username">Username</label>
									<input id="username" type="text" class="form-control" name="username" value="" required autofocus>
									<div class="invalid-feedback">
										Username tidak valid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="forgot.html" class="float-right">
											Lupa Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password tidak valid
							    	</div>
								</div>

								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-danger btn-block" name="btnlogin"> 
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Belum punya akun? <a href="register.html">Create One</a>
								</div>
							</form>
								<?php
								require("..\includes\koneksi.php");
								if (isset($_POST['btnlogin'])) {
									$user_login = $_POST['username'];
									$pass_login = $_POST['password'];
	
									$sql = "SELECT * FROM akun WHERE username = '{$user_login}' and password = '{$pass_login}'";
									$query = mysqli_query($koneksi, $sql);
	
	
									if (!$query) {
										die("Query gagal" . mysqli_error($koneksi));
									}
	
									while ($row = mysqli_fetch_array($query)) {
										$user = $row['username'];
										$pass = $row['password'];
										$nama = $row['nama'];
										$email = $row['email'];
									}
	
									if ($user_login == $user && $pass_login == $pass) {
										header("Location:admin/index.php");
										$_SESSION['username'] = $user;
										$_SESSION['nama'] = $nama;
										$_SESSION['email'] = $email;
									} else {
										echo "<p style=\"text-align: center\"><br/></br><font color = red><b> User Tidak Ditemukan </b></font></p>";
									}
								}
								?>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2022 &mdash; Kantin Rawr
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
	<script src="js/my-login.js"></script>
</body>

</html>