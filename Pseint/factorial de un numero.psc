Proceso factorial_de_un_numero
	definir num, fac como entero
	factorial <-1
	i <- 2
	Escribir "ingrese el valor de num"
	Leer num
	Repetir
		fac <- fac*i
		i <- i+1
	Hasta Que i<=num-1
	Escribir 'el factorial de ' num ' es ', fac
FinProceso


