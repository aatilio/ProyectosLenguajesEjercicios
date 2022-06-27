Algoritmo ordenar_mas_menos_numros
	definir num,nume,vector, numer Como Entero
	Escribir "cuantos datos quiere almacenar "
	leer num
	dimension vector[num]
	Para i<-1 Hasta num Hacer
		Escribir 'ingrese el numero: ' Sin Saltar
		leer numer
		vector[i] = numer
		
	Fin Para
	Para i<-1 Hasta num-1 Hacer
		Para j<-1 Hasta num-1 Hacer
			Si vector[j] >vector[j+1]  Entonces
				nume = vector[j]
				vector[j] = vector[j+1]
				vector[j+1] = nume
			Fin Si
		Fin Para
	Fin Para
	Escribir " "
	escribir "vector ordenado de menor a mayor"
	Para i<-1 Hasta num Hacer
		escribir " ",vector[i],Sin Saltar;
	Fin Para
	escribir " "
FinAlgoritmo
