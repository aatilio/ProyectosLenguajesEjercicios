//PAGINA179
Algoritmo Ejercicio179
	Definir AC, CONT, aleat como Entero
	Definir PROM como Real
	AC <- 0
	PROM <- 0
	CONT <- 0
	Dimension Sueldo(70)
	Para i desde 1 hasta 70 //tal ves sea hasta 69
		aleat <- azar(100)+1
		Escribir "Ingreso de Sueldo " i " es: " aleat
		Sueldo(i) = aleat
		AC <- AC + Sueldo(i)
	Fin para
	PROM <- AC/70
	Escribir "El promedio de sueldos es " PROM
	Para i desde 1 hasta 70
		Si Sueldo(i)>PROM 
			CONT <- CONT + 1
		FinSi
	Fin para
	Escribir "El numeros de sueldos que superan el sueldo promedio es de " CONT
FinAlgoritmo
