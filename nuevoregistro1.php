<html>
<head>
	<title>Registro</title>
	<link rel="stylesheet" href="estil.css" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/animate/animate.min.css">
  <!-- theme css -->
  <link rel="stylesheet" href="css/theme.min.css">
  <link rel="stylesheet" href="css/custom.css">

	<script type="text/javascript" src="functions.js"></script>	
</head>

<body>
<section class="bg-image bg-image-sm" style="background-image: url('img/bg/login.jpg');">
    <div class="overlay"></div>
    <div class="container">      
			<form action="nuevoregistro1.php" method="POST" name="formu" id="formula" class="formulario">
			<h1 class="formulario_titulo">Registro</h1>
	
            <input type="text" name="nombre" placeholder="nombre" class="formulario_input">
            <input type="textarea" rows="3" cols="50" name="direccion" placeholder="direccion" class="formulario_input">
            <input type="text" name="telefono" placeholder="telefono" class="formulario_input">
              <input type="password" name="contraseña" placeholder="clave" class="formulario_input"> 
              <input type="password" name="re_contraseña" placeholder="repetir clave" class="formulario_input">              
            <input type="submit" name="guardar"  value="Guardar" class="formulario_input">
            <input type="reset" name="cancelar"  value="Cancelar" class="formulario_input">
			</form>
    </div>
			<?php
			include("conexion.php");
			
			echo "sms1";
			if(isset($_POST["guardar"])){
				echo "sms2";
				$nombre=$_POST["nombre"];
				$direccion=$_POST["direccion"];
				$telefono=$_POST["telefono"];
                $contraseña=$_POST["contraseña"];
                $re_contraseña=$_POST["re_contraseña"];
				$id=3;
				
                    $sql="INSERT INTO libreria(id,clave,nombre,direccion,telefono) VALUES('$id','$contraseña','$nombre','$direccion','$telefono')";
					
					
					if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

					$id=$id+1;
					
					echo "datos guardados";
				
            }

            
            

			
			
			?>
			
</body>
</html>