SubAlgoritmo tiposT()
	Escribir "Los triángulos por la dimension de sus lados pueden ser:"
	Escribir "Triángulo Equilátero : Todos sus lados son iguales"
	Escribir "Triángulo Isósceles : Tiene dos lados iguales "
	Escribir "Triángulo Escaleno : Todos sus lados son diferentes"
	Escribir " ...................."
FinSubAlgoritmo

SubAlgoritmo tris (a,b,c)
	Leer a
	Leer b
	Leer c
	Si (c-a) < b & b < (c+a) Entonces
		Escribir " La figura es un triangulo"
	SiNo
		Escribir " La figura no es un triangulo"
	FinSi
FinSubAlgoritmo

SubAlgoritmo cla
	Definir a,b,c Como Entero
	Escribir "Ingrese el tamaño de los lados"
	Leer a
	Leer b
	Leer c
	Si a=b & a <> c & b <> c Entonces
		Escribir " El triangulo es Isosceles"
	SiNo
		Si a = b & a = c & b = c Entonces
			Escribir " El triangulo es Equilatero"
		SiNo
			Escribir " El triangulo es Escaleno"
		FinSi
	FinSi
FinSubAlgoritmo

Algoritmo Ejercicio12
	tiposT()
	Escribir "La formula para comprobar si la figura es un triangulo es : "
	Escribir "a + b > c "
	Escribir "a + c > b "
	Escribir "b + c > a "
	Escribir "Ingrese los lados"
	tris(a,b,c)
	Escribir "Clasificación por sus lados"
	cla()
FinAlgoritmo
