Algoritmo divicion_inversa
	Definir num,inversa Como Entero
	Definir divi Como Real
	Escribir 'introdusca numero que quiere dividir'
	Leer num
	inversa <- num-1
	Repetir
		divi <- num/inversa
		Escribir 'la divicion de ',num,' entre ',inversa,' es ',divi
		inversa <- inversa-1
	Hasta Que inversa==0
FinAlgoritmo
