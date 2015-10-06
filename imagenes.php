<?php	

	if (isset($_POST)) {
		
		$ruta = "assets/img/";
		$ruta .= implode("/", $_POST);
		$ruta .= "/mini";
		$imagenes = scandir($ruta);
		$return = array();

		foreach ($imagenes as $key => $value) {

			if (!in_array($value,array(".",".."))){

				$return[] = $value;
      		}
		}

		echo json_encode($return);
	}
	
?>