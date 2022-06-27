Algoritmo sueldo_promedio_N_trabajadores
	Definir promedio,may,men Como Real
	Definir sumsueldo,sueldo,contador Como Entero
	may <- -1000
	men <- 1000
	contador <- 1
	Escribir 'ingrese sueldo de trabajador numero ',contador,', (0) para terminar'
	Leer sueldo
	Mientras sueldo<>0 Hacer
		Si sueldo>may Entonces
			may <- sueldo
		FinSi
		Si sueldo<men Entonces
			men <- sueldo
		FinSi
		sumsueldo <- sumsueldo+sueldo
		contador <- contador+1
		Escribir 'ingrese sueldo de trabajador numero ',contador,', (0) para terminar'
		Leer sueldo
	FinMientras
	promedio <- sumsueldo/(contador-1)
	Escribir 'el sueldo  mayor es: ',may
	Escribir 'el sueldo menor es: ',men
	Escribir 'el promedio de los ',contador-1,' sueldos es: ',promedio
FinAlgoritmo
