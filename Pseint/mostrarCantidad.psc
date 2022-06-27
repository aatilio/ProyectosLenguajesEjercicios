SubProceso mostrarCantidad ( cantidad, elementos, n ) 
	Para i<-1 Hasta n Con Paso 1 Hacer
		Escribir "El numero de caracters para la palabra : ",elementos[i]," es de ",cantidad[i]
	FinPara
FinSubProceso

Algoritmo Ejercicio7 
	Definir longitud_nombres como entero
	Definir palabra como cadena
	Definir cant como entero
	Escribir "Ingrese la cantidad de palabras"
	Leer cant 
	Dimension cant_caracteres[cant]
	Dimension palabra[cant]
	Para i<-1 Hasta cant Con Paso 1 Hacer
		Escribir "Ingrese la " i "° palabra en la posicion ",i 
		Leer palabra[i]
		cant_caracteres[i]<-Longitud(palabra[i])
	FinPara 
	mostrarCantidad(cant_caracteres, palabra, cant)
FinAlgoritmo
