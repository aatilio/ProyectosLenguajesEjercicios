Algoritmo maximo
	definir n,num,max como entero
	Leer num
	n <- 1
	max <- num
	Repetir
		n <- n + 1
		Leer num
		Si num > max Entonces
			max <-  num
		SiNo
			Escribir "intente nuevamente"
		FinSi
	Hasta Que n = 100
	Escribir "numero mayor o maximo es: ", max
FinAlgoritmo
