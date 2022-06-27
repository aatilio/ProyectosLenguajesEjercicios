SubAlgoritmo dias()
	Definir dia como Cadena
	Repetir 
		Escribir "Ingrese el día"
		Leer dia
		Si dia<>"domingo" Entonces
			Escribir " Dia laborable "
		FinSi
	Hasta Que dia="domingo"
	Si dia="domingo" Entonces
		Escribir " * Dia no laborable * "
	FinSi
FinSubAlgoritmo

Algoritmo Ejercicio8
	Escribir "Dias de la semana"
	Escribir " ************ "
	dias()
FinAlgoritmo

