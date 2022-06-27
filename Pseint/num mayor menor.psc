Algoritmo sueldo_promedio_N_trabajadores
	Definir promedio,may,men Como Real
	Definir sumsueldo,sueldo,contador Como Entero
	may <- -10000
	men <- 10000
	contador <- 1
	Escribir 'ingrese sueldo de trabajador numero ',contador,', (0) para terminar'
	Leer sueldo
	Mientras sueldo<>0 Hacer
		contador <- contador+1
		Si sueldo>may Entonces
			may <- sueldo
		FinSi
		Si sueldo<men Entonces
			men <- sueldo
		FinSi
		sumsueldo <- sumsueldo+sueldo
		Escribir 'ingrese sueldo de trabajador numero ',contador,', (0) para terminar'
		Leer sueldo
	FinMientras
	promedio <- sumsueldo/contador
	Escribir 'el sueldo  mayor es: ',may
	Escribir 'el sueldo menor es: ',men
	Escribir 'el promedio de los ',contador,' sueldos es: ',promedio
FinAlgoritmo
