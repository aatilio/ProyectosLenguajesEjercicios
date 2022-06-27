Algoritmo conversor_de_longitudes
	Definir opc,opc2 Como Entero
	Definir metros,pies,centimetros,tamano,convertido Como Real
	Definir magnitud,magnitud2 Como Caracter
	Repetir
		Escribir 'POR FAVOR ELEGIR UNA OPCION VALIDA'
		Escribir '1:Convertir metros a otra magnitud'
		Escribir '2:Convertir pies a otra magnitud'
		Escribir '3:Convertir centimetros a otra magnitud'
		Escribir "4:Convertir pulgadas a otra magnitud"
		Leer opc
	Hasta Que opc==1 O opc==2 O opc==3 o opc==4
	Repetir
		Escribir 'Ingresar la longitud a convertir, mayor a 0'
		Leer tamano
	Hasta Que tamano>0
	Segun opc  Hacer
		1:
			magnitud ="metros"
			Escribir "POR FAVOR ELEGIR UNA OPCION"
			Escribir "1:Convertir a pies"
			Escribir "2:Convertir a centimetros"
			Escribir "3:Convertir a pulgadas"
			Leer opc2
			Si opc2 == 1 Entonces
				magnitud2 ="pies"
				convertido = tamano*100 / 30.48
			Fin Si
			Si opc2 == 2 Entonces
			magnitud2 ="centimetros"
			convertido = tamano * 100
			Fin Si
			Si opc2 ==3 Entonces
				magnitud2 ="pulgadas"
				convertido = tamano*100 / 2.54
			Fin Si
		2:
			magnitud ="pies"
			Escribir "POR FAVOR ELEGIR UNA OPCION"
			Escribir "1:Convertir a metros"
			Escribir "2:Convertir a centimetros"
			Escribir "3:Convertir a pulgadas"
			Leer opc2
			Si opc2 == 1 Entonces
				magnitud2 ="metros"
				convertido = tamano / 3.28
			Fin Si
			Si opc2 ==2 Entonces
				magnitud2 ="centimetros"
				convertido = tamano * 30.48
			Fin Si
			Si opc2 ==3 Entonces
				magnitud2 ="pulgadas"
				convertido = tamano *12
			Fin Si
		3:
			magnitud ="centimetros"
			Escribir "POR FAVOR ELEGIR UNA OPCION"
			Escribir "1:Convertir a pies"
			Escribir "2:Convertir a metros"
			Escribir "3:Convertir a pulgadas"
			Leer opc2
			Si opc2 == 1 Entonces
				magnitud2 ="pies"
				convertido = tamano / 30.48
			Fin Si
			Si opc2 ==2 Entonces
				magnitud2 ="metros"
				convertido = tamano / 100
			Fin Si
			Si  opc2 ==3 Entonces
				magnitud2 ="pulgadas"
				convertido = tamano / 2.54
			Fin Si
		4:
			magnitud ="pulgadas"
			Escribir "POR FAVOR ELEGIR UNA OPCION"
			Escribir "1:Convertir a pies"
			Escribir "2:Convertir a centimetros"
			Escribir "3:Convertir a metros"
			Leer opc2
			Si opc2 == 1 Entonces
				magnitud2 ="pies"
				convertido = tamano * 0.083334
			Fin Si
			Si opc2 ==2 Entonces
					magnitud2 ="centimetros"
					convertido = tamano * 2.54
			Fin Si
			Si opc2 ==3 Entonces
					magnitud2 ="metros"
					convertido = tamano * 0.0254
			Fin Si
		De Otro Modo:
			Escribir 'INGRESE UN VALOR VALIDO POR FAVOR'
	FinSegun
	Escribir tamano,' ',magnitud,' es igual a ',convertido,' ',magnitud2
FinAlgoritmo
