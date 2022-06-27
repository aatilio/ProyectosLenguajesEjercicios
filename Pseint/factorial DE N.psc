Algoritmo Factorial
	Definir n,i como entero
	Definir f como Real
	Escribir 'ingrese el valor de n'
	Leer n
	Si n > 0 Entonces
		f <- 1
		 i <- 1
	SiNo
		Escribir "ingrese un valo mayor a 0"
	FinSi
	Repetir
		i <- i + 1
		f <- f * i
	Hasta Que i = n +1
	Escribir "el factorial de " n " es " ,f
FinAlgoritmo

