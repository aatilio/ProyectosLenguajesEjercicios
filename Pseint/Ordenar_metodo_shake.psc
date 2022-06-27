Algoritmo ordenar_Sacudida
	
	
	Definir i, N, ultimo  como real;
	definir venta como entero
	Escribir Sin Saltar "Ingrese el numero de meses a ordenar: ";
	Leer N;
	
	ultimo = N
	izquierda = 2
	derecha = N
	dimension venta[N]	
	
	Escribir "INGRESO DE DIVIDENDOS DE CADA MES: ";
	para i <- 1 hasta N con paso 1 Hacer
		Escribir Sin Saltar "posicion ", i
		leer venta[i];
	FinPara
	Escribir "VENTAS POR MES  ";
	para i <- 1 hasta N con paso 1 Hacer
		Escribir venta[i] " ";       
	FinPara
	Escribir "";
	
	Repetir
		Para i<-derecha Hasta izquierda Con Paso -1 Hacer
			si venta[i-1] > venta[i] Entonces
				num <- venta[i-1]
				venta[i-1] <- venta[i]
				venta[i] <- num
				ultimo <- i
			FinSi
		Fin Para
		izquierda <- ultimo + 1
		Para i<-izquierda Hasta derecha Con Paso 1 Hacer
			si venta[i-1] > venta[i] Entonces
				num <- venta[i-1]
				venta[i-1] <- venta[i]
				venta[i] <- num
				ultimo <- i
			FinSi
		Fin Para
		izquierda <- ultimo - 1
	Hasta Que izquierda < derecha;
	
	Escribir "El vector ordenado de mayor a menor es:";
	para i <- 1 hasta N con paso 1 Hacer       
		Escribir venta[i] " ";       
	FinPara
	Escribir "";
	Escribir "El vector ordenado de menor a mayor es:";
	para i <- N hasta 1 con paso -1 Hacer       
		Escribir venta[i] ;       
	FinPara
FinAlgoritmo
