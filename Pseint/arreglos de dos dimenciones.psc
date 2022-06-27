Algoritmo arreglos
	Definir filas,columnas,nunmayor,nunmenor,contapar,contaimpar Como Entero
	Definir suma,promedio Como Real
	Escribir 'numero de filas ' Sin Saltar
	Leer filas
	Escribir 'numero de columnas ' Sin Saltar
	Leer columnas
	Dimension aray[filas,columnas]
	nunmayor<--20
	nunmenor<-20
	Para i<-1 Hasta filas Hacer
		Para j<-1 Hasta columnas Hacer
			//Escribir 'guardar dato en la posicion ',i,',',j,' : ' Sin Saltar
			aray[i,j] <- azar(20);
			suma <- suma+aray[i,j]
			Si nunmayor < aray[i,j] Entonces
				nunmayor <- aray[i,j]
			Fin Si
			Si nunmenor > aray[i,j] Entonces
				nunmenor <- aray[i,j]
			Fin Si
			Si (aray[i,j] MOD 2 = 0) Entonces
				contapar<-contapar+1
			sino 
				contaimpar<-contaimpar+1
			Fin Si
		FinPara
	FinPara
	promedio <- suma/(filas*columnas)
	Escribir ' '
	Escribir 'salida de datos'
	Escribir '  '
	Para i<-1 Hasta filas Hacer
		Para j<-1 Hasta columnas Hacer
			Escribir aray[i,j],' ' Sin Saltar
		FinPara
		Escribir ' '
	FinPara
	Escribir ' '
	Escribir 'la suma de todos los valores es: ',suma
	Escribir 'El promedio de todos los valores es: ',promedio
	Escribir 'El numero mayor es: ',nunmayor
	Escribir 'El numero menor es: ',nunmenor
	Escribir 'Cantidad de numeros pares es: ',contapar
	Escribir 'Cantidad de numeros impares es: ',contaimpar
FinAlgoritmo
