<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Todos os anos de Copa do Mundo.</title>
</head>
<body>
	<form method="post" action="">
		<select name="copa>


			<?php

			for ($i=1930; $i<=2024; $i+=4)
			{ 

				if (($i != 1942) && ($i != 1946)) {

				echo "<option value='$i'>$i</option>";
			}
		}


		$copa = $_POST['copa'];


		switch ($copa) {
			case '1930':
				echo "O país sede foi : Uruguai <br>
				O campeão foi: Uruguai";
				break;
			case '1934':
				echo "O país sede foi : Italia <br>
				O campeão foi: Itália";
				break;
			case '1938':
				echo "O país sede foi : França <br>
				O campeão foi: Itália";
				break;
			case '1938':
				echo "O país sede foi : França <br>
				O campeão foi: Itália";
				break;
			 
			default:
				// code...
				break;
		}



			?>
		</select>
		<input type="submit name="VSF">

	</form>

	
</body>
</html>