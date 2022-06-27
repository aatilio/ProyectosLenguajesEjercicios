Algoritmo sueldo_descuento_sueldo_total
	Escribir 'numero de trabajadores  ' Sin Saltar
	Leer num
	Para i<-1 Hasta num Hacer
		Escribir 'codigo de trabajador numero ',i,' : ' Sin Saltar
		Leer codigo
		Escribir 'horas trabajadas numero ',i,' : ' Sin Saltar
		Leer horas
		Escribir 'sueldo por hora del trabajador numero ',i,' : ' Sin Saltar
		Leer sueldo
		total <- sueldo*horas
		Si total<949 Entonces
			sueldoneto <- total*0.795
		FinSi
		Si total>=950 Y total<=2500 Entonces
			sueldoneto <- total*0.78
		FinSi
		Si total>2500 Y total<=4000 Entonces
			sueldoneto <- total*0.74
		FinSi
		Si total>4000 Entonces
			sueldoneto <- total*0.66
		FinSi
		descuento <- total-sueldoneto
	FinPara
	Para i<-1 Hasta num Hacer
		Escribir '______________________________________________________'
		Escribir ''
		Escribir 'codigo del trabajador numero ',i,' es: ',codigo
		Escribir 'sueldo base del  trabajador numero ',i,' es: ',total
		Escribir 'descuento del trabajador numero ',i,' es: ',descuento
		Escribir 'sueldo neto del  trabajador numero ',i,' es: ',sueldoneto
		Escribir ''
	FinPara
FinAlgoritmo
