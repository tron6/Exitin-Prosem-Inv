<?php
include('is_logged.php');//Archivo verifica que el usario que intenta acceder a la URL esta logueado
// checking for minimum PHP version
if (version_compare(PHP_VERSION, '5.3.7', '<')) {
    exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
} else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    // if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
    // (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
    require_once("../libraries/password_compatibility_library.php");
}		
		if (empty($_POST['nombre'])){
			$errors[] = "Nombres vacíos";
		} elseif (empty($_POST['telefono'])){
			$errors[] = "telefono vacío";
		}  elseif (empty($_POST['correo'])) {
            $errors[] = "correo vacío";
        } elseif (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Su dirección de correo electrónico no está en un formato de correo electrónico válida";
        } elseif (empty($_POST['direccion'])) {
            $errors[] = "la direccion no puede estar vacío";
        
        } elseif (empty($_POST['colonia'])) {
            $errors[] = "la colonia no puede estar vacia";
        }  elseif (empty($_POST['comercio'])) {
            $errors[] = "el nombre del comercio no puede estar vacio";
        }  elseif (empty($_POST['ciudad'])) {
            $errors[] = "la ciudad no puede estar vacia";
        
        } elseif (
			!empty($_POST['nombre'])
			&& !empty($_POST['telefono'])
            && !empty($_POST['correo'])
            && !empty($_POST['direccion'])
            && !empty($_POST['colonia'])
            && !empty($_POST['comercio'])
            && !empty($_POST['ciudad'])
            ) {
            require_once ("../config/db.php");//Contiene las variables de configuracion para conectar a la base de datos
			require_once ("../config/conexion.php");//Contiene funcion que conecta a la base de datos
			
				// escaping, additionally removing everything that could be (html/javascript-) code
                $nombre = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES)));
				$telefono = mysqli_real_escape_string($con,(strip_tags($_POST["telefono"],ENT_QUOTES)));
				$correo = mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES)));
                $direccion = mysqli_real_escape_string($con,(strip_tags($_POST["direccion"],ENT_QUOTES)));
                $colonia= mysqli_real_escape_string($con,(strip_tags($_POST["colonia"],ENT_QUOTES)));
                $comercio = mysqli_real_escape_string($con,(strip_tags($_POST["comercio"],ENT_QUOTES)));
                $ciudad = mysqli_real_escape_string($con,(strip_tags($_POST["ciudad"],ENT_QUOTES)));


					
                // check if user or email address already exists
                
					// write new user's data into database
                    $sql = "INSERT INTO clientes (nombre, telefono, email, direccion, colonia,nombre_comercio,ciudad)
                            VALUES('".$nombre."','".$telefono."','" . $correo. "', '" . $direccion . "', '" . $colonia . "', '" . $comercio . "', '" . $ciudad . "');";
                    $query_new_user_insert = mysqli_query($con,$sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        $messages[] = "La cuenta ha sido creada con éxito.";
                    } else {
                        $errors[] = "Lo sentimos , el registro falló. Por favor, regrese y vuelva a intentarlo.";
                    }
                }
            

		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>