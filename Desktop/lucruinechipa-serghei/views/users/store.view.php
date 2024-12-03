<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet">
	<style>
		.wrapper {
			width: 500px;
			padding: 20px;
		}

		.wrapper h2 {
			text-align: center;
		}

		.wrapper form .form-group span {
			color: red;
		}
	</style>
</head>

<body>
	<main>
		<section class="container wrapper">
			<h2>Welcome home <?php echo $_SESSION['username']; ?></h2>
			<a href="/users/password_reset.php" class="btn btn-outline-warning">Reset Password</a>
			<a href="/users/logout" class="btn btn-outline-danger">Sign Out</a>
		</section>
	</main>
</body>

</html>