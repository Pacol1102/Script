<!DOCTYPE html>
	<html lang='es'>
		<head>
			<meta charset='utf-8'>
			<title>INGRESAR</title>
			<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		</head>
		<body>
			<div class='main'>
				<form method='post' action='login.php'>
					<input type='text'  id='usuario' name='usuario' placeholder='Usuario' required />
					<input type='password' id='pass' name='pass' placeholder='Contraseña' required />
					<input type='submit' class='botonlg' value='Iniciar Sesion'  />
				<form>
			</div>
			<div></div>
			<script type='text/javascript'>
				function confirmar(){
					var usuario = $('#usuario').val();
					var pass = $('#pass').val();
					$.ajax({
						url: 'login.php',
						type: 'post',
						data: 'usuario='+usuario+'&pass='+pass
					}).done(function(resp){
						console.log('si');
					});
				}
			</script>
		</body>
	</html>