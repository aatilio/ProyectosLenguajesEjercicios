Algoritmo suma_de_salarios
	Definir n,x,s,h,t,suma Como Entero
	Escribir "ingresa los numeros de trabajadores"
	Leer n
	x <- 1
	suma <- 0
	Mientras x<=n Hacer
		Escribir "ingresar horas trabajadas "
		Leer h
		Escribir "ingresar tarifa"
		Leer t
		s <- h*t
		Escribir "su sueldo del trabajador es: ", s
		suma <- suma + s
		x <- x+1
	FinMientras
	Escribir "la suma del salario es: ", suma
FinAlgoritmo
