SubProceso operaciones()
	Escribir "1.- SUMA"
	Escribir "2.- RESTA"
	Escribir "3.- MULTIPLICACIÓN"
	Escribir "4.- DIVISIÓN"
	Escribir "0.- SALIR"
	Escribir " " //salto de linea
	Escribir "Seleccione un numero, segun a la operacion que quiera hacer: "
FinSubProceso

SubProceso operacion(op)
	Definir n1,n2 como Real
	Escribir "Lectura de los valores numericos"
	Escribir "Ingrese el 1° numero :"
	Leer n1;
	Escribir "Ingrese el 2° numero :"
	Leer n2;
	Segun op Hacer
		1:
			respuesta<-n1+n2
		2:
			respuesta<-n1-n2
		3:
			respuesta<-n1*n2
		4:
			respuesta<-n1/n2
		De Otro Modo:
			
	FinSegun
	Escribir "El resultado de la Operacion es : ",respuesta  //finalisacion
	Esperar Tecla
FinSubProceso

Algoritmo Ejercicio16
	Definir num Como Entero
	num<-0
	Repetir
		Limpiar Pantalla //este ennuciado elimina lo que esta en pantalla
		operaciones()
		Leer num
		Segun num Hacer
			1:
				operacion(num)
			2:
				operacion(num)
			3:
				operacion(num)
			4:
				operacion(num)
			De Otro Modo:
				Escribir " cerrando programa..."
		FinSegun
	Hasta Que (num<1 | num>4)
FinAlgoritmo
