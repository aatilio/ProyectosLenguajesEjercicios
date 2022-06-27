Algoritmo arreglos
	Definir notas,Nmayor,Nmenor,dapro,apro,num Como Entero
	Definir suma,promedio Como Real
	Escribir 'cuantas notas quiere almacenar:  ' Sin Saltar
	Leer notas
	Dimension aray[notas]
	Nmayor <- -20
	Nmenor <- 20
	Para i<-1 Hasta notas Hacer
		aray[i] <- azar(20)
		suma <- suma+aray[i]
		Si aray[i]>Nmayor Entonces
			Nmayor <- aray[i]
		FinSi
		Si aray[i]<Nmenor Entonces
			Nmenor <- aray[i]
		FinSi
		Si aray[i]<13 Entonces
			dapro <- dapro+1
		SiNo
			apro <- apro+1
		FinSi
	FinPara
	promedio <- suma/notas
	Escribir ' '
	Escribir 'total de notas'
	Escribir ' '
	Para i<-1 Hasta notas Hacer
		Escribir 'alumno ',i,', nota: ',aray[i]
	FinPara
	Escribir ' '
	Escribir '		Alumnos aprobados ',apro
	Escribir ' '
	Para i<-1 Hasta notas Hacer
		Si aray[i]>=13 Entonces
			Escribir 'alumno ',i,' con la nota: ',aray[i]
		FinSi
	FinPara
	Escribir ' '
	Escribir '		Alumnos desaprobados ',dapro
	Escribir ' '
	Para i<-1 Hasta notas Hacer
		Si aray[i]<13 Entonces
			Escribir 'alumno ',i,' con la nota: ',aray[i]
		FinSi
	FinPara
	Escribir ' '
	Escribir 'suma de todas las notas es:     ',suma
	Escribir 'promedio de todas las notas es: ',promedio
	Escribir 'nota mayor es:                  ',Nmayor
	Escribir 'nota menor es:                  ',Nmenor
	Para i<-2 Hasta notas Hacer
		Para j<-1 Hasta notas-1 Hacer
			Si aray[j]>aray[j+1] Entonces
				num <- aray[j]
				aray[j] <- aray[j+1]
				aray[j+1]<-num
			FinSi
		FinPara
	FinPara
	Escribir ' '
	Escribir 'Rranquin de notas ordenados de mayor a menor'
	Escribir ' '
	Para i<-notas Hasta 1 Con Paso -1 Hacer
		Escribir 'alumno en el puesto ',notas-(i-1),', nota: ',aray[i]
	FinPara
	Escribir ' '
FinAlgoritmo
