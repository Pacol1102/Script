<?php
	$usuario = $_POST['usuario'];
	$pass = $_POST ['pass'];
	$conn=mysqli_connect("localhost","root","","proyecto");
	$query="select * FROM usuario WHERE nombre_usuario = '".$usuario."';";
	$res=mysqli_query($conn,$query);
	$fila=mysqli_fetch_assoc($res);
	if(isset($fila)){
		if($pass == $fila['password'])
		{
			$query="select * FROM publicacion;";
			$res=mysqli_query($conn,$query);
			$publicacion=mysqli_fetch_assoc($res);
echo		"<center><table border='2'>
				<caption>Publicaci|ones</caption>
				<tr>
					<th>id_publicacion</th>
					<th>id_usuario</th>
					<th>texto</th>
					<th>tiempo</th>
				</tr>";
				while($publicacion)
				{
echo				"<tr>";
echo					"<td>".$publicacion['id_publicacion']."</td>";
echo					"<td>".$publicacion['id_usuario']."</td>";
echo					"<td>".$publicacion['texto_publicacion']."</td>";
echo					"<td>".$publicacion['tiempo_publicacion']."</td>";
echo				"</tr>";
					$publicacion=mysqli_fetch_assoc($res);
				}
echo			"</table></center>";
			$query="select * FROM comentario;";
			$res=mysqli_query($conn,$query);
			$comentario=mysqli_fetch_assoc($res);
echo		"<center><table border='2'>
				<caption>comentarios</caption>
				<tr>
					<th>id_comentario</th>
					<th>id_publicacion</th>
					<th>id_usuario</th>
					<th>texto</th>
					<th>tiempo</th>
				</tr>";
				while($comentario)
				{
echo				"<tr>";
echo					"<td>".$comentario['id_comentario']."</td>";
echo					"<td>".$comentario['id_publicacion']."</td>";
echo					"<td>".$comentario['id_usuario']."</td>";
echo					"<td>".$comentario['texto_comentario']."</td>";
echo					"<td>".$comentario['tiempo_comentario']."</td>";
echo				"</tr>";
					$comentario=mysqli_fetch_assoc($res);
				}
echo			"</table></center>";
		}
		else
			echo 'Contraseña incorrecta';
	}
	else
		echo 'no existe el usuario';
?>