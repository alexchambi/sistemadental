<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/font-awesome.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="public/css/AdminLTE.min.css">
    <!-- iCheck -->
	<link rel="stylesheet" href="public/css/blue.css">
	<link rel="stylesheet" href="public/css/miestilo.css">
</head>

<body class="hold-transition login-page" style="background-image: url('public/images/fondo.jpg')">
	<div class="login-box text-center">
		<div class="login-logo">
			<a href="login.php"><b>Dental Like</b></a>
		</div>
		<div class="login-box-body">
		<form action="views/home.php" method="get">
					<h1>Login</h1>
					<div class="form-group has-feedback">
						<input type="text" class="form-control" placeholder="Usuario">
					</div>
					<div class="form-group has-feedback">
						<input type="password" class="form-control" placeholder="Contraseña">
					</div>
					<div>
						<label>
		      				<input type="checkbox" name="recordar">
		      				Recordar
		    			</label>	
					</div>
		    			<button type="submit" name="acceder" class="btn btn-block btn-primary">
						Acceder</button>
						<button type="submit" name="registrar" class="btn btn-block btn-success" >
						Registrar
						</button>	
		    		
		    		<label><a href="#">¿Olvidaste la Contraseña?</a></label>
			
			<h2><small>Alex Chambi &copy; <?php echo date("Y"); ?> </small></h2>
		</form>
		</div>
	</div>

	<!-- jQuery 2.1.4 -->
    <script src="public/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="public/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="public/js/icheck.min.js"></script>
    <script>
      $(function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
</body>
</html>