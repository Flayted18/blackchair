<!DOCTYPE html>
<html>
<head>
	<title>EJERCICIOS CLASE 4</title>
</head>
<body>
	<?php 
		//------Ejercicios IF, ELSE, ELSEIF
		echo "EJERCICIOS IF, ELSE.<br>";
//////////1. Identificar si un numero es par.
		echo "1. Identificar si un numero es par.<br>";
		$num=rand(1,10);
		if ($num%2) {
			echo $num."<br> El numero es Impar<br><br>";
		}
		else{
			echo $num."<br> El numero es Par<br><br>";
		}
//////////2. Identifique cual es mayor y si es par o impar.
		echo "2. Identifique cual es mayor y si es par o impar.<br>";
		$num2=rand(1,10);
		if (($num>$num2)&&($num%2)) {
			echo "Numero 1: ".$num."<br>  Numero 2: ".$num2."<br>";
			echo "El mayor es ".$num." y es Impar<br><br>";
		}
		elseif ($num>$num2) {
			echo "Numero 1: ".$num."<br>  Numero 2: ".$num2."<br>";
			echo "El mayor es ".$num." y es Par<br><br>";
		}
		elseif (($num2>$num)&&($num2%2)) {
			echo "Numero 1: ".$num."<br>  Numero 2: ".$num2."<br>";
			echo "El mayor es ".$num2." y es Impar.<br><br>";
		}
		elseif ($num2>$num){
			echo "Numero 1: ".$num."<br>  Numero 2: ".$num2."<br>";
			echo "El mayor es ".$num2." y es Par.<br><br>";
		}		
		
		if (($num==$num2)) {
			echo "Numero 1: ".$num."<br>  Numero 2: ".$num2."<br>";
			if ($num%2) {
				echo "Son iguales e Impares<br><br>";
			}
			else{
				echo "Son iguales y Pares<br><br>";
			}
		}
//////////3. Nombre y Sueldo Aleatorios.
		echo "3. Nombre y sueldo aleatorio.<br>";
		$nombre = "Santiago";
		//Creando el sueldo aleatorio
		$sueldo = rand(1,2000);

		if ($sueldo<500) {//Comprobando si es menor a 500$
			echo $nombre." Y gano menos del minimo, mi sueldo es: ".$sueldo."<br>" ;
		}
		elseif (($sueldo>499)&&($sueldo<1001)) {//Comprobando si es mayor a 500$ y menor que 1000$
			echo $nombre." Y mi sueldo esta en la media: ".$sueldo."<br>";
		}
		else{
			if ($sueldo>1000) {//Comprobando si es mayor a 1000$
				echo $nombre." Y le tengo que dar gracias al señor, mi sueldo es: ".$sueldo."<br>";
			}
		}
		echo "<br>";
//////////4. Mostrar DIA, MES Y HORA
		echo "4. Mostrar DIA, MES Y HORA<br>";

		$hora=date("h:i:s");//La hora es -7 a la Hora de Venezuela... Si son las 19:00 mostrara las 12:00.
		$dia=date("l");//Muestra el dia en ingles.
		$diames=date("d");//Muestra el dia del mes en que estamos.
		$mes=date("n");//Muestra el mes del año.
		$anio=date("y");//Muestra el año.

 		//Traduciendo los dias a español. Preferiria hacerlo con Switch, pero estamos con los ejercicios de if.
		if ($dia=="Monday")
			echo "Lunes ";
		elseif ($dia=="Tuesday")
			echo "Martes ";
		elseif ($dia=="Wednesday")
			echo "Miercoles ";
		elseif ($dia=="Thursday")
			echo "Jueves ";
		elseif ($dia=="Friday")
			echo "Viernes ";
		elseif ($dia=="Saturday")
			echo "Sabado ";
		elseif ($dia=="Sunday") 
			echo "Domingo ";

		//Convirtiendo los meses de NUMERO a LETRA.
		if ($mes==1) {
			echo $diames." del mes de Enero del 20".$anio."<br>";
		}
		elseif ($mes==2) {
			echo $diames." del mes de Febrero del 20".$anio."<br>";
		}
		elseif ($mes==3) {
			echo $diames." del mes de Marzo del 20".$anio."<br>";
		}
		elseif ($mes==4) {
			echo $diames." del mes de Abril del 20".$anio."<br>";
		}
		elseif ($mes==5) {
			echo $diames." del mes de Mayo del 20".$anio."<br>";
		}
		elseif ($mes==6) {
			echo $diames." del mes de Junio del 20".$anio."<br>";
		}
		elseif ($mes==7) {
			echo $diames." del mes de Julio del 20".$anio."<br>";
		}
		elseif ($mes==8) {
			echo $diames." del mes de Agosto del 20".$anio."<br>";
		}
		elseif ($mes==9) {
			echo $diames." del mes de Septiembre del 20".$anio."<br>";
		}
		elseif ($mes==10) {
			echo $diames." del mes de Octubre del 20".$anio."<br>";
		}
		elseif ($mes==11) {
			echo $diames." del mes de Noviembre del 20".$anio."<br>";
		}
		elseif ($mes==12) {
			echo $diames." del mes de Diciembre del 20".$anio."<br>";
		}
		echo "La hora actual es ".$hora."<br><br>";
		
//////////5. Rueda de camion.
		echo "5. Rueda de camion.<br>";
		//Declarando las variables.
		$tipo="Rueda De Camion.<br>";
		$grosor=0.33;
		$diametro=1.25;
		$marca="Kimashuki";

		//Comprobando el diametro de la Rueda.
		if ($diametro>1.4) {
			echo "La rueda es para un vehiculo grande.<br><br>";
		}
		if ($diametro<=1.4) {
			echo "La rueda es para un vehiculo pequeño.<br><br>";
		}
		if ($diametro==1000) {
			echo "No existe un tamaño de rueda valido.<br><br>";
		}

		//----------Ejercicios SWITCH.
		echo "EJERCICIOS SWITCH. <br><br>";
//////////1. Meses
		echo "1. Meses.<br>";
		$mes2=1;
		switch ($mes2) {
			case 1:
				echo ("El mes es Enero.<br>");
				break;
			case 2:
				echo ("El mes es Febrero.<br>");
				break;
			case 10:
				echo ("El mes es Octubre.<br>"); 
				break;
			default: 
				echo ("El mes no es Enero, Febrero ni Octubre.<br>"); 
				break;
		}
		echo "<br>";
//////////2.Tienda de mascotas
		echo "2. Tienda de mascotas.<br>";
		$mascota=rand(1,6);
		switch ($mascota) {
			case 1:
				echo "Compro un perro.<br>";
				break;
			case 2:
				echo "Compro un gato.<br>";
				break;
			case 3:
				echo "Compro un conejo.<br>";
				break;
			case 4:
				echo "Compro un pez.<br>";
				break;
			case 5:
				echo "Compro un hamster.<br>";
				break;
			default:
				echo "Ninguna de las anteriores.<br>";
				break;
		}
		echo "<br>";
//////////3. Bomba de Fluidos
		echo "3. Bomba de Fluidos.<br>";
		$tipoDeMotor=3;

		switch ($tipoDeMotor) {
			case 0:
				echo "No hay establecido un valor definido para el tipo de bomba.<br>";
				break;
			case 1:
				echo "La bomba es una bomba de agua.<br>";
				break;
			case 2:
				echo "La bomba es una bomba de Gasolina.<br>";
				break;
			case 3:
				echo "La bomba es una bomba de Hormigon.<br>";
				break;
			case 4:
				echo "La bomba es una bomba de pasta alimenticia.<br>";
				break;
			default:
				echo "No existe un valor valido para tipo de bomba";
				break;
		}
		echo "<br>";
		//---------EJERCICIOS WHILE
		echo "EJERCICIOS WHILE.<br><br>";
//////////1. Del 0 al 10.
		echo "1. Incremento del 0 al 10.<br>";
		$i=0;
		while ($i <= 10) {
					echo $i."<br>";
					$i++;
				}	

		echo "<br><br>";	
//////////2. Carro quedandose sin Gasolina		
		echo "2. Carro quedandose sin Gasolina.<br>";
		$gaso=10;
		while ($gaso>-1) {
			echo "El nivel de gasolina esta en: ".$gaso."<br>";
			$gaso--;
		}

		echo "<br>";
//////////3. Reponiendo la gasolina del carro.
		echo "3. Reponiendo la gasolina del carro.<br>";
		do {
		  	$gaso++;
		  	echo "EL nivel de gasolina es: ".$gaso."<br>";
		  } while ( $gaso<10); 
		  if ($gaso==10) {
		   	echo "El tanque esta lleno.<br>";
		  } 
		


	?>

</body>
</html>