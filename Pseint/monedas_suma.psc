Algoritmo monedas_suma
	Definir moneda,suma,contador Como Entero
	Escribir 'ingrese la moneda que esta ahrrondo'
	Leer moneda
	Mientras moneda<>00 Hacer
		suma <- suma+moneda
		contador <- contador+1
		Escribir 'ingrese la moneda que esta ahrrondo, 00 para finalizar'
		Leer moneda
	FinMientras
	Escribir 'la cantidad de dinero ahorrado es: ',suma
	Escribir 'la cantidad de monedas es: ',contador
FinAlgoritmo
