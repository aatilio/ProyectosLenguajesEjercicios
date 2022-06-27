Algoritmo conversor_de_PIES_a_metros_y_sentimetros_solo_10_veces
	Definir metros,pies,centimetros,convertido Como Real
	Para n<-1 Hasta 11 Hacer
		Escribir '_____________________________________________________________________________________'
		Escribir 'ingrese la medida en PIES para convertirlos a METROS y CENTIMETROS, (0) Para terminar'
		Leer pies
		metros <- pies/3.28
		centimetros <- pies*30.48
		Escribir 'los ',pies,' pies, equibalen a ',metros,' metros'
		Escribir 'los ',pies,' pies, equibalen a ',centimetros,' centimetros'
	FinPara
FinAlgoritmo
