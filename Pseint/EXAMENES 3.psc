Algoritmo sin_titulo
	Definir examParcial,praCalificadas Como Entero
	Definir sumap,sumae,promedio Como Real
	Escribir 'INGRESE LA CANTIDAD DE NOTAS A ALMACENAR EN CADA ASIGNATURA'
	Escribir 'Numero de notas en Prácticas calificadas ' Sin Saltar
	Leer praCalificadas
	Dimension PC[praCalificadas]
	Escribir 'INGRESO DE NOTAS, PRACTICA CALIFICADA'
	Para i<-1 Hasta praCalificadas Hacer
		Escribir 'Nota de alumno numero ',i Sin Saltar
		Leer PC[i]
		sumap <- sumap+PC[i]
	FinPara
	Escribir 'Numero de notas en Exámenes parciales ' Sin Saltar
	Leer examParcial
	Dimension EP[examParcial]
	Escribir 'INGRESO DE NOTAS, EXAMEN PARCIAL'
	Para i<-1 Hasta examParcial Hacer
		Escribir 'Nota de alumno numero ',i Sin Saltar
		Leer EP[i]
		sumae <- sumae+EP[i]
	FinPara
	Escribir 'Suma de todos los valores de los practica calificada ',sumap
	Escribir 'promedio de las practica calificada ',sumap/praCalificadas
	Escribir 'Suma de todos los valores de los exámenes parciales ',sumae
	Escribir 'promedio de lasexámenes parciales ',sumae/examParcial
	Escribir 'promedio de notas de las 2 asignaturas ',(sumae+sumap)/(praCalificadas+examParcial)
FinAlgoritmo
