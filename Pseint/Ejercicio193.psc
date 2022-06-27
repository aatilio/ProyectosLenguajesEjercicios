// PAGINA 193
Algoritmo Ejercicio193
	Definir N, X, I, K, A, ALEAT Como Entero
	Dimension A(100)
	Para N desde 1 hasta 100
		ALEAT <- azar(100)+1
		A(N) <- ALEAT
		Escribir "La posicion " N " del arreglo es " A(N)
	FinPara
	Si N >= 1 Entonces
		Escribir "Ingresar el elemento que se va a modificar"
		Leer X
		I <- 1
		BAND <- Falso
		Mientras (I <= N) y (BAND = Falso) Hacer
			Si A(I) = X Entonces
				BAND <- Verdadero
				N <- N - 1
				K <- 1
				Para K desde I hasta N
					A(K) <- A(K+1)
					K <- K +1
					Si (K <= N)
						I = N +1
					FinSi
				Fin Para
			SiNo
				I <- I + 1
			FinSi
		Fin Mientras
		Si BAND = Falso
			Escribir "El elemento " X "no esta en el arreglo"
		FinSi
	SiNo
		Escribir "El arreglo A esta vacio"
		
	FinSi
	
FinAlgoritmo