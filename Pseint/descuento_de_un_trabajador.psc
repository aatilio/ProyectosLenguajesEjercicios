Algoritmo descuento_de_un_trabajador
	Definir sueldo,sueldoneto,descuento Como Entero
	Escribir "ingrese su sueldo"
	Leer sueldo
	Si sueldo<=1000 Entonces
		descuento <- sueldo*0.1
		sueldoneto <- sueldo-descuento
	SiNo
		Si sueldo<=2000 Entonces
			descuento <- (sueldo-1000)*0.05+1000*0.1
			sueldoneto <- sueldo-descuento
		SiNo
			descuento <- (sueldo-2000)*0.03+1000*0.1
			sueldoneto <- sueldo-descuento
		FinSi
	FinSi
	Escribir "el descuento de su sueldo es: ", descuento
	Escribir "el sueldo neto es: " sueldoneto
FinAlgoritmo
