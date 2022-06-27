Algoritmo vectores_ordenar
	Definir vector, i,j, N, min, aux como entero;		
	Escribir Sin Saltar "Ingrese la cantidad de datos a procesar: ";
	Leer N;
	dimension vector[N]	
	Escribir "Ingreso de datos por teclado: ";
	para i <- 1 hasta N con paso 1 Hacer
		Escribir Sin Saltar "posicion ", i
		leer vector[i];
	FinPara
	Escribir "vector origianl ";
	para i <- 1 hasta N con paso 1 Hacer
		Escribir sin Saltar vector[i] " ";       
	FinPara
	Escribir "";
	para i <- 1 hasta N con paso 1 Hacer       
		min <- i;       
		Para j<-i+1 Hasta N Con Paso 1 Hacer           
			Si vector[j] > vector[min] Entonces    //con < ordena ascendente, con > ordena descendente
				min <- j;
			Fin Si           
		FinPara       
		aux <- vector[i];
		vector[i] <- vector[min];
		vector[min] <- aux;       
	FinPara
	Escribir "El vector ordenado de mayor a menor es:";
	para i <- 1 hasta N con paso 1 Hacer       
		Escribir Sin Saltar vector[i] " ";       
	FinPara
	Escribir "";
	Escribir "El vector ordenado de menor a mayor es:";
	para i <- N hasta 1 con paso -1 Hacer       
		Escribir Sin Saltar vector[i] " ";       
	FinPara
FinAlgoritmo

