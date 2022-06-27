Funcion mostrarArreglonumeros(datos)
	Definir posicion como Entero
	Para posicion <-1 Hasta 10 Con Paso 1 Hacer
		Escribir " * " datos[posicion]," * "
	FinPara
FinFuncion

Algoritmo Ejercicio6
	Definir n,num,posicion como Entero
	Dimension num[10]
	Para posicion <-1 Hasta 10 Con Paso 1 Hacer
		Escribir "Ingrese el numero " posicion "° "
		Leer num[posicion]
	FinPara
	Escribir "Los numeros ingresados son :"
	mostrarArreglonumeros(num)
FinAlgoritmo
