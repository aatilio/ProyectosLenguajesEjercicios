Algoritmo numero_par_impar
	Definir num Como Entero
	Escribir 'ingrese un numero cualquiera (00 para finalizar)'
	Leer num
	Si num MOD 2==0 Entonces
		Escribir 'el numero ',num,' es par'
	SiNo
		Escribir 'el numero ',num,' es impar'
	FinSi
	Mientras num<>00 Hacer
		Escribir 'ingrese un numero cualquiera (00 para finalizar)'
		Leer num
		Si num MOD 2==0 Entonces
			Escribir 'el numero ',num,' es par'
		SiNo
			Escribir 'el numero ',num,' es impar'
		FinSi
	FinMientras
FinAlgoritmo
