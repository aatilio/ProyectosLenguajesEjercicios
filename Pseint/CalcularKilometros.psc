
Proceso  CalcularKilometros
	Definir  nombre Como Caracter ;
	Dimensi�n  nombre [10] ;
	Definir  kms Como Entero ;
	// 8  columnas , las  sietes  primeras  para  guardar  los  km  diarios , y  la � ltima  para  guardar  los  km  acumulados
	Dimensi�n  kms [10,8] ;
	Definir  num_conductores , indice_cond, indice_dias, tam_conductores_max como Entero ;
	Definir  dias Como Caracter ;
	Dimensi�n  dias [7] ;
	
	tam_conductores_max <- 10 ;
	dias [ 0 ] <- "Lunes" ;
	dias [ 1 ] <- "Martes" ;
	dias [ 2 ] <- "Mi�rcoles" ;
	dias [ 3 ] <- "Jueves" ;
	dias [ 4 ] <- "Viernes" ;
	dias [ 5 ] <- "S�bado" ;
	dias [ 6 ] <- "Domingo" ;
	// Leo  el  n � mero  de  conductores .  N � mero  de  datos  que  voy  a  guardar  en  los  arrays
	Repetir
		Escribir  sin saltar "� Cuant�s conductores tiene la empresa ?:" ;
		Escribir  sin saltar "� Cu�ntos conductores tiene la empresa ?:" ;
		Leer  num_conductores ;
		// El  n � mero  indicado  debe  ser  menor  que  el  m � ximo  tama � o  de  los  arrays
		Si  num_conductores > tam_conductores_max Entonces
			Escribir  "C�mo m�ximo puedo guardar la informaci�n de" , tam_conductores_max , "conductores" ;
		FinSi
		Hasta  que num_conductores <= tam_conductores_max ;
		// Recorro  los  vectores  hasta  el  n � mero  de  conductores  indicados
		Para  indice_cond <-0 hasta num_conductores-1 Hacer
			Escribir  sin saltar "Nombre del conductor", indice_cond + 1, ":" ;
			// Leo  el  nombre
			Leer  nombre [indice_cond] ;
			// Leo  los  km  realizados  para  cada  d � a
			Para  indice_dias <-0 hasta 6 Hacer
				Escribir  sin saltar "� Cuant�s km ha realizado el", dias [indice_dias], "?:" ;
				Escribir  sin saltar "� Cu�ntos km ha realizado el", dias [indice_dias], "?:" ;
				Leer  kms [indice_cond, indice_dias] ;
			FinPara
		FinPara
		// Recorro  los  vectores  hasta  el  n � mero  de  conductores  indicados
		Para  indice_cond <-0 hasta num_conductores-1 Hacer
			// Incializo  el  acumulador  por  conductor
			// Inicializo  el  acumulador  por  conductor
			kms [ indice_cond , 7 ] <- 0 ;
			// Acumulo  los  kms  por  d � a  y  lo  guardo  en  un  vector
			Para  indice_dias <-0 hasta 6 Hacer
				kms [ indice_cond , 7 ] <- kms [ indice_cond , 7 ] + kms [ indice_cond , indice_dias ] ;
			FinPara
		FinPara
		// Recorro  los  vectores  hasta  el  n � mero  de  conductores  indicados  para  mostrar  la  informaci�n � n  de  salida
		Para  indice_cond <-0 hasta num_conductores-1 Hacer
			Escribir  nombre [indice_cond], "ha realizado", kms [indice_cond, 7], "kms." ;
	FinPara
FinProceso
