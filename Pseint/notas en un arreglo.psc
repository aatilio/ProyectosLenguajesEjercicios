Algoritmo arreglos
	Definir notas, Nmayor, Nmenor,dapro,apro Como Entero
	Definir suma,promedio Como Real
	Escribir 'cuantas notas quiere almacenar:  ' Sin Saltar
	Leer notas
	Dimension aray[notas]
	Nmayor<--20
	Nmenor<-20
	Para i<-1 Hasta notas Hacer
			Escribir 'nota del alumno ',i,' : ' Sin Saltar
			leer aray[i]
			suma <- suma+aray[i]
			Si aray[i]>Nmayor Entonces
				Nmayor<-aray[i]
			Fin Si
			Si aray[i]<Nmenor Entonces
				Nmenor<-aray[i]
			FinSi
			Si aray[i]<13 Entonces
				dapro<-dapro+1
			SiNo
				apro<-apro+1
			fin si
	FinPara
	promedio <- suma/notas
	Escribir ' '
	Escribir 'total de notas'
	Para i<-1 Hasta notas Hacer
			Escribir "alumno ", i, ", nota: ", aray[i]
		Escribir ' '
	FinPara
	escribir "		Alumnos aprobados ", apro
	Escribir ' '
	Para i<-1 Hasta notas Hacer
		Si aray[i]>=13 Entonces
			escribir "alumno ", i " con la nota: ",aray[i]
		fin si
	Fin Para
	Escribir ' '
	escribir "		Alumnos desaprobados ", dapro
	Escribir ' '
	Para i<-1 Hasta notas Hacer
		Si aray[i]<13 Entonces
			escribir "alumno ", i " con la nota: ",aray[i]
		fin si
	Fin Para
	Escribir ' '
	Escribir 'suma de todas las notas es:     ',suma
	Escribir 'promedio de todas las notas es: ',promedio
	Escribir 'nota mayor es:                  ',Nmayor
	Escribir 'nota menor es:                  ',Nmenor
FinAlgoritmo

