Algoritmo suma_y_promedio_pares
	Definir num,npar,nimpar,sumi,sump Como Entero
	Definir promediop,promedioi Como Real
	Escribir 'ingrese un numero cualquiera (0 para finalizar)'
	Leer num
	Mientras num<>0 Hacer
		Escribir 'ingrese un numero cualquiera (0 para finalizar)'
		Leer num
		Si num MOD 2==0 Entonces
			npar <- npar+1
			sump <- sump+num
			promediop <- sump/npar
		SiNo
			nimpar <- nimpar+1
			sumi <- sumi+num
			promedioi <- sumi/nimpar
		FinSi
	FinMientras
	Escribir 'suma de los números pares ',sump
	Escribir 'cantidad de números pares ',npar
	Escribir 'el promedio de los mismos ',promediop
	Escribir 'suma de los números impares ',sumi
	Escribir 'cantidad de números impares ',nimpar
	Escribir 'el promedio de los mismos ',promedioi
FinAlgoritmo
