SubAlgoritmo prom <- practicas ( nota, cantidad )
	suma <- 0
	Para i<-1 Hasta cantidad Hacer
		suma <- suma + nota[i]
	FinPara
	prom<- suma/cantidad
FinSubAlgoritmo

Algoritmo Ejercicio2
	Dimension notas[6]
	Escribir "Ingrese la cantidad de practicas:"
	Leer n
	Para i<-1 Hasta n Hacer
		Escribir "Ingrese la nota de la practica ",i,":"
		Leer notas[i]
	FinPara
	Escribir "Su promedio es: ",practicas(notas,n)
Fin Algoritmo