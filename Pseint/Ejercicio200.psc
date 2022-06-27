// PAGINA 200
Algoritmo Ejercicio200
	Definir N, X, I, K, A, ALEAT Como Entero
	Dimension A(100)
	Para N desde 1 hasta 100
		ALEAT <- azar(100)+1
		A(N) <- ALEAT
		Escribir "La posicion " N " del arreglo es " A(N)
	FinPara
	Si N < 100 Entonces
		Escribir "Ingresar el elemento que se va a modificar"
		Leer X
		I <- 1			
		Mientras  (I <= N) y (A(I) < X) Hacer
			I <- I +1
		Fin Mientras 
		Si (I > N) o (A(I) < X) 
			POS <- -I
		SiNo
			POS <- I
		Fin Si
		Si POS > 0
			Escribir "El elemento ya existe"
		SiNo 
			N <- N + 1
			POS <- POS * (-1)
			I <- N
		Fin Si
		Para I desde N hasta (POS + 1)
			A(I) <- A(I-1) 
			A(I) <- A(I-1)
			I <- I-1
		Fin Para
		A(POS) <- X
	SiNo
		Escribir "No hay espacio en el arreglo para nuevas inserciones"
	FinSi	
FinAlgoritmo
