<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$userID = $_REQUEST['id'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM preguntadrograsuno WHERE id ='$userID' ");


while($posicion= mysqli_fetch_array($consulta))
{
	echo$pos = $posicion['btnpregunta1'];
	echo "\n";
}


//localhost/JuegoDrogas/MostrarPosXusuarioUno.php?id=6

//http://tadeolabhack.com:8081/test/Datos/MostrarPosXusuarioUno.php?IDuser=6

?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$userID = $_REQUEST['userID'];
$itemID = $_REQUEST['itemID'];



//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM preguntadrograsuno WHERE idUsuario='$userID' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
	$id = $row['id'];

    $idSelectU = $row['idUsuario'];
    $boton1 = $row['btnpregunta1'];
	$boton2 = $row['btnpregunta2'];
	$boton3 = $row['btnpregunta3'];
	
}



//si no hay idSelect, significa que el usuario no existe
if($id == null && $idSelectU != $userID)
{
	
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = 1;
	}
	else
	{
		$variablebtnpregunta1 = 0;
	}

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = 1;
	}
	else
	{
		$variablebtnpregunta2 = 0;
	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = 1;
	}
	else
	{
		$variablebtnpregunta3 = 0;
	}

	

	//insertar Valores en la base de datos Bonotes
	$adicionarDatos = mysqli_query($conect, "INSERT INTO preguntadrograsuno(idUsuario,btnpregunta1,btnpregunta2,btnpregunta3) VALUES('$userID','$variablebtnpregunta1','$variablebtnpregunta2','$variablebtnpregunta3')");

	echo "adicionado";
}
//si el id de usuario si esta en la tabla entonces cambie los valores 
else
{
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = $boton1+1;

		$actualizabtnpregunta1 = mysqli_query($conect, "UPDATE preguntadrograsuno SET btnpregunta1=$variablebtnpregunta1  WHERE idUsuario='$userID' ");
	}	

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = $boton2+1;

		$actualizabtnpregunta2 = mysqli_query($conect, "UPDATE preguntadrograsuno SET btnpregunta2=$variablebtnpregunta2  WHERE idUsuario='$userID' ");

	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = $boton3+1;

		$actualizabtnpregunta3 = mysqli_query($conect, "UPDATE preguntadrograsuno SET btnpregunta3=$variablebtnpregunta3  WHERE idUsuario='$userID' ");
	}

	


	echo "Funciono!!!!!";

}







//http://tadeolabhack.com:8081/test/Datos/PostSelect.php?userID=0&itemID=2


//http://localhost/JuegoDrogas/PostSelect.php?userID=0&itemID=2

?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$userID = $_REQUEST['userID'];
$itemID = $_REQUEST['itemID'];



//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM preguntaquizcuatro WHERE idUsuario='$userID' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
	$id = $row['id'];

    $idSelectU = $row['idUsuario'];
    $boton1 = $row['btnquiz1'];
	$boton2 = $row['btnquiz2'];
	$boton3 = $row['btnquiz3'];
	
}



//si no hay idSelect, significa que el usuario no existe
if($id == null && $idSelectU != $userID)
{
	
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = 1;
	}
	else
	{
		$variablebtnpregunta1 = 0;
	}

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = 1;
	}
	else
	{
		$variablebtnpregunta2 = 0;
	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = 1;
	}
	else
	{
		$variablebtnpregunta3 = 0;
	}

	

	//insertar Valores en la base de datos Bonotes
	$adicionarDatos = mysqli_query($conect, "INSERT INTO preguntaquizcuatro(idUsuario,btnquiz1,btnquiz2,btnquiz3) VALUES('$userID','$variablebtnpregunta1','$variablebtnpregunta2','$variablebtnpregunta3')");

	echo "adicionado";
}
//si el id de usuario si esta en la tabla entonces cambie los valores 
else
{
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = $boton1+1;

		$actualizabtnpregunta1 = mysqli_query($conect, "UPDATE preguntaquizcuatro SET btnquiz1=$variablebtnpregunta1  WHERE idUsuario='$userID' ");
	}	

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = $boton2+1;

		$actualizabtnpregunta2 = mysqli_query($conect, "UPDATE preguntaquizcuatro SET btnquiz2=$variablebtnpregunta2  WHERE idUsuario='$userID' ");

	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = $boton3+1;

		$actualizabtnpregunta3 = mysqli_query($conect, "UPDATE preguntaquizcuatro SET btnquiz3=$variablebtnpregunta3  WHERE idUsuario='$userID' ");
	}

	


	echo "Funciono!!!!!";

}







//http://tadeolabhack.com:8081/test/Datos/PostSelect.php?userID=0&itemID=2


//http://localhost/JuegoDrogas/PostSelectCinco.php?userID=5&itemID=2

?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$userID = $_REQUEST['userID'];
$itemID = $_REQUEST['itemID'];



//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM preguntaquiztres WHERE idUsuario='$userID' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
	$id = $row['id'];

    $idSelectU = $row['idUsuario'];
    $boton1 = $row['btnquiz1'];
	$boton2 = $row['btnquiz2'];
	$boton3 = $row['btnquiz3'];
	
}



//si no hay idSelect, significa que el usuario no existe
if($id == null && $idSelectU != $userID)
{
	
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = 1;
	}
	else
	{
		$variablebtnpregunta1 = 0;
	}

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = 1;
	}
	else
	{
		$variablebtnpregunta2 = 0;
	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = 1;
	}
	else
	{
		$variablebtnpregunta3 = 0;
	}

	

	//insertar Valores en la base de datos Bonotes
	$adicionarDatos = mysqli_query($conect, "INSERT INTO preguntaquiztres(idUsuario,btnquiz1,btnquiz2,btnquiz3) VALUES('$userID','$variablebtnpregunta1','$variablebtnpregunta2','$variablebtnpregunta3')");

	echo "adicionado";
}
//si el id de usuario si esta en la tabla entonces cambie los valores 
else
{
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = $boton1+1;

		$actualizabtnpregunta1 = mysqli_query($conect, "UPDATE preguntaquiztres SET btnquiz1=$variablebtnpregunta1  WHERE idUsuario='$userID' ");
	}	

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = $boton2+1;

		$actualizabtnpregunta2 = mysqli_query($conect, "UPDATE preguntaquiztres SET btnquiz2=$variablebtnpregunta2  WHERE idUsuario='$userID' ");

	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = $boton3+1;

		$actualizabtnpregunta3 = mysqli_query($conect, "UPDATE preguntaquiztres SET btnquiz3=$variablebtnpregunta3  WHERE idUsuario='$userID' ");
	}

	


	echo "Funciono!!!!!";

}







//http://tadeolabhack.com:8081/test/Datos/JuegoDrogas/PostSelect.php?userID=10&itemID=2


//http://localhost/JuegoDrogas/PostSelectCuatro.php?userID=5&itemID=2

?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';


//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$userID = $_REQUEST['userID'];
$itemID = $_REQUEST['itemID'];



//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM preguntaquizuno WHERE idUsuario='$userID' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
	$id = $row['id'];

    $idSelectU = $row['idUsuario'];
    $boton1 = $row['btnquiz1'];
	$boton2 = $row['btnquiz2'];
	$boton3 = $row['btnquiz3'];
	
}



//si no hay idSelect, significa que el usuario no existe
if($id == null && $idSelectU != $userID)
{
	
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = 1;
	}
	else
	{
		$variablebtnpregunta1 = 0;
	}

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = 1;
	}
	else
	{
		$variablebtnpregunta2 = 0;
	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = 1;
	}
	else
	{
		$variablebtnpregunta3 = 0;
	}

	

	//insertar Valores en la base de datos Bonotes
	$adicionarDatos = mysqli_query($conect, "INSERT INTO preguntaquizuno(idUsuario,btnquiz1,btnquiz2,btnquiz3) VALUES('$userID','$variablebtnpregunta1','$variablebtnpregunta2','$variablebtnpregunta3')");

	echo "adicionado";
}
//si el id de usuario si esta en la tabla entonces cambie los valores 
else
{
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = $boton1+1;

		$actualizabtnpregunta1 = mysqli_query($conect, "UPDATE preguntaquizuno SET btnquiz1=$variablebtnpregunta1  WHERE idUsuario='$userID' ");
	}	

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = $boton2+1;

		$actualizabtnpregunta2 = mysqli_query($conect, "UPDATE preguntaquizuno SET btnquiz2=$variablebtnpregunta2  WHERE idUsuario='$userID' ");

	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = $boton3+1;

		$actualizabtnpregunta3 = mysqli_query($conect, "UPDATE preguntaquizuno SET btnquiz3=$variablebtnpregunta3  WHERE idUsuario='$userID' ");
	}

	


	echo "Funciono!!!!!";

}







//http://tadeolabhack.com:8081/test/Datos/JuegoDrogas/PostSelectDos.php?userID=0&itemID=20


//http://localhost/JuegoDrogas/PostSelectDos.php?userID=0&itemID=2

?>
<?php

$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$userID = $_REQUEST['userID'];
$itemID = $_REQUEST['itemID'];



//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM preguntaquizdos WHERE idUsuario='$userID' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
	$id = $row['id'];

    $idSelectU = $row['idUsuario'];
    $boton1 = $row['btnquiz1'];
	$boton2 = $row['btnquiz2'];
	$boton3 = $row['btnquiz3'];
	
}



//si no hay idSelect, significa que el usuario no existe
if($id == null && $idSelectU != $userID)
{
	
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = 1;
	}
	else
	{
		$variablebtnpregunta1 = 0;
	}

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = 1;
	}
	else
	{
		$variablebtnpregunta2 = 0;
	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = 1;
	}
	else
	{
		$variablebtnpregunta3 = 0;
	}

	

	//insertar Valores en la base de datos Bonotes
	$adicionarDatos = mysqli_query($conect, "INSERT INTO preguntaquizdos(idUsuario,btnquiz1,btnquiz2,btnquiz3) VALUES('$userID','$variablebtnpregunta1','$variablebtnpregunta2','$variablebtnpregunta3')");

	echo "adicionado";
}
//si el id de usuario si esta en la tabla entonces cambie los valores 
else
{
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = $boton1+1;

		$actualizabtnpregunta1 = mysqli_query($conect, "UPDATE preguntaquizdos SET btnquiz1=$variablebtnpregunta1  WHERE idUsuario='$userID' ");
	}	

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = $boton2+1;

		$actualizabtnpregunta2 = mysqli_query($conect, "UPDATE preguntaquizdos SET btnquiz2=$variablebtnpregunta2  WHERE idUsuario='$userID' ");

	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = $boton3+1;

		$actualizabtnpregunta3 = mysqli_query($conect, "UPDATE preguntaquizdos SET btnquiz3=$variablebtnpregunta3  WHERE idUsuario='$userID' ");
	}

	


	echo "Funciono!!!!!";

}



//http://tadeolabhack.com:8081/test/Datos/JuegoDrogas/PostSelectTres.php?userID=0&itemID=2



//http://tadeolabhack.com:8081/test/Datos/PostSelect.php?userID=0&itemID=2


//http://localhost/JuegoDrogas/PostSelectTres.php?userID=5&itemID=2

?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$userID = $_REQUEST['userID'];
$itemID = $_REQUEST['itemID'];



//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM preguntaetapaface WHERE idUsuario='$userID' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
	$id = $row['id'];

    $idSelectU = $row['idUsuario'];
    $boton1 = $row['btnetapa1'];
	$boton2 = $row['btnetapa2'];
	$boton3 = $row['btnetapa3'];
	
}



//si no hay idSelect, significa que el usuario no existe
if($id == null && $idSelectU != $userID)
{
	
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = 1;
	}
	else
	{
		$variablebtnpregunta1 = 0;
	}

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = 1;
	}
	else
	{
		$variablebtnpregunta2 = 0;
	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = 1;
	}
	else
	{
		$variablebtnpregunta3 = 0;
	}

	

	//insertar Valores en la base de datos Bonotes
	$adicionarDatos = mysqli_query($conect, "INSERT INTO preguntaetapaface(idUsuario,btnetapa1,btnetapa2,btnetapa3) VALUES('$userID','$variablebtnpregunta1','$variablebtnpregunta2','$variablebtnpregunta3')");

	echo "adicionado";
}
//si el id de usuario si esta en la tabla entonces cambie los valores 
else
{
	if($itemID == 1)
	{
		//en el php le adiciono +1 al btn1
		$variablebtnpregunta1 = $boton1+1;

		$actualizabtnpregunta1 = mysqli_query($conect, "UPDATE preguntaetapaface SET btnetapa1=$variablebtnpregunta1  WHERE idUsuario='$userID' ");
	}	

	if($itemID == 2)
	{
		//en el php le adiciono +1 al btn2
		$variablebtnpregunta2 = $boton2+1;

		$actualizabtnpregunta2 = mysqli_query($conect, "UPDATE preguntaetapaface SET btnetapa2=$variablebtnpregunta2  WHERE idUsuario='$userID' ");

	}

	if($itemID == 3)
	{
		//en el php le adiciono +1 al btn3
		$variablebtnpregunta3 = $boton3+1;

		$actualizabtnpregunta3 = mysqli_query($conect, "UPDATE preguntaetapaface SET btnetapa3=$variablebtnpregunta3  WHERE idUsuario='$userID' ");
	}

	


	echo "Funciono!!!!!";

}







//http://tadeolabhack.com:8081/test/Datos/PostSelectUno.php?userID=10&itemID=2


//http://localhost/JuegoDrogas/PostSelectUno.php?userID=0&itemID=2

?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


$indata =$_REQUEST["in"];
$userID = $_REQUEST['id'];


	if($indata =="BorrarTodo")
	{
		$actualizaBtn1 = mysqli_query($conect, "DELETE FROM usuariodrogas");
		echo "Borro Todo";
	}


//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM usuariodrogas WHERE id='$userID' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
	$usuario = $row['id'];
    $nombre = $row['nombre'];
}

//si no hay idSelect, significa que el usuario no existe
if($nombre == null && $usuario != $userID)
{
	echo "No existe el usuario para poderlo eliminar";
}
//si existe el usuario entonces borrelo de acuerdo a la instrucción recibida
else
{
	if($indata =="BorrarUsuario")
	{
		$actualizaBtn1 = mysqli_query($conect, "DELETE FROM usuariodrogas WHERE id='$userID'");
		echo "Usuario Borrado";
	}

	if($indata =="BorrarDatosUsuario")
	{
		$actualizaBtn1 = mysqli_query($conect, "UPDATE usuariodrogas SET nombre='Actualizado',apellido='Si ve profe',sexo='Si sirve',edad=12,eres='pongame 5'  WHERE id='$userID'");
		echo "Datos del Usuario borrados";
	}
}

//http://tadeolabhack.com:8081/test/Datos/BorrarDatos.php?in=BorrarDatosUsuario&userID=1
//in=BorrarTodo
//in=BorrarUsuario
//in=BorrarDatosUsuario

//http://localhost/JuegoDrogas/BorrarDatos.php?in=BorrarDatosUsuario&id=302
?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables

$nombre = $_REQUEST['nom'];
$apellido = $_REQUEST['ape'];
$sexo = $_REQUEST['se'];
$edad = $_REQUEST['ed'];
$eres = $_REQUEST['er'];


  //insertar Valores en la base de datos Bonotes
  $adicionarDatos = mysqli_query($conect, "INSERT INTO usuariodrogas(nombre,apellido,sexo,edad,eres) VALUES('$nombre','$apellido','$sexo','$edad','$eres')");

  echo "adicionado123";



//http://soymariaojeda.com/mamappdb/escribir.php.php

//http://tadeolabhack.com:8081/test/Datos/JuegoDrogas/escribir.php?id=99&nom=JUN&ape=SUA&se=MACHO&ed=20&er=consumidor

//http://localhost/JuegoDrogas/escribir.php?id=99&nom=GAB&ape=OJEDA&se=MUJER&ed=20&er=consumidor

?>


<?php



$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$id = $_REQUEST['id'];
$nombre = $_REQUEST['nom'];
$apellido = $_REQUEST['ape'];
$sexo = $_REQUEST['se'];
$edad = $_REQUEST['ed'];
$eres = $_REQUEST['er'];


  //insertar Valores en la base de datos Bonotes
  $adicionarDatos = mysqli_query($conect, "INSERT INTO usuariodrogas(id,nombre,apellido,sexo,edad,eres) VALUES('$id','$nombre','$apellido','$sexo','$edad','$erer')");

  echo "adicionado";





//http://tadeolabhack.com:8081/test/Datos/escribir.php?identificacion=200&nom=pepito&ape=perez&ed=16

//http://localhost/JuegoDrogas/escribir.php?id=1&nom=Jorge&ape=pepito&se=hombre&ed=12&er=consumidor

?>


<?php



$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)

$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


// Check connection
if ($conect->connect_error) {
	die("Error: No se pudo conectar a MySQL." . $conect->connect_error);
}
else
{
	echo "ConexionEstablecida";
}



//http://tadeolabhack.com:8081/test/Datos/isConection.php


//http://localhost/JuegoDrogas/isConection.php

?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);


//recibe los datos de unity, usamos el valor de estas variables
$apellido = $_REQUEST['apellido'];


//pregunto si el id de usuario ya esta en la tabla
$IDexistente = mysqli_query($conect, "SELECT * FROM usuariodrogas WHERE apellido='$apellido' ");


//se obtienen todos los datos del usuario idUser
while($row = mysqli_fetch_array($IDexistente))
{
    $usuarioID = $row['id'];
    $usuarioNombre = $row['nombre'];
    $usuarioApellido = $row['apellido'];
    $usuarioSexo = $row['sexo'];
    $usuarioEdad = $row['edad'];

    echo $usuarioEdad;


}
//localhost/JuegoDrogas/leer.php?apellido=adad


//http://tadeolabhack.com:8081/test/Datos/leer.php?ape=pso


?>


<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$userID = $_REQUEST['IDuser'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM Botones WHERE idUser ='$userID' ");


while($botones1= mysqli_fetch_array($consulta))
{
	$button1 = $botones1['btn1'];	
	$button2 = $botones1['btn2'];
	$button3 = $botones1['btn3'];
	$button4 = $botones1['btn4'];
}

$rta = $button1+$button2+$button3+$button4;

echo $rta;	
echo "\n";

//http://tadeolabhack.com:8081/test/Datos/MostrarBotonXusuario.php?IDuser=85

?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$userID = $_REQUEST['id'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM usuariodrogas WHERE id ='$userID' ");


while($posicion= mysqli_fetch_array($consulta))
{
	echo$pos = $posicion['nombre'];
	echo "\n";
}


//localhost/JuegoDrogas/MostrarPosXusuario.php?id=320

//http://tadeolabhack.com:8081/test/Datos/MostrarPosXusuario.php?IDuser=85

?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$userID = $_REQUEST['id'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM preguntadrograsuno WHERE id ='$userID' ");


while($posicion= mysqli_fetch_array($consulta))
{
	echo$pos = $posicion['btnpregunta2'];
	echo "\n";
}


//localhost/JuegoDrogas/MostrarPosXusuarioUno.php?id=6

//http://tadeolabhack.com:8081/test/Datos/MostrarPosXusuarioUno.php?IDuser=6

?>
<?php


$dbname = 'UnityDB';
//$dbname = 'unitybd';

$dbuser = 'camilo';
$dbpass = 'Noviembre2018';
$dbhost = 'localhost';

//conectarce al servidor mysql  (servidor,user,pasword,NombreBD)
$conect = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

$userID = $_REQUEST['id'];

//consultar la tabla
$consulta = mysqli_query($conect, "SELECT * FROM preguntadrograsuno WHERE id ='$userID' ");


while($posicion= mysqli_fetch_array($consulta))
{
	echo$pos = $posicion['btnpregunta3'];
	echo "\n";
}


//localhost/JuegoDrogas/MostrarPosXusuarioUno.php?id=6

//http://tadeolabhack.com:8081/test/Datos/MostrarPosXusuarioUno.php?IDuser=6

?>
