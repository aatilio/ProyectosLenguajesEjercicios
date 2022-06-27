SubProceso semana(dias,d)
	Para i=1 Hasta d Con Paso 1 Hacer
		Imprimir "Ingrese el ",i," dia de la semana:"
		Leer dias[i]
	FinPara
Fin SubProceso

Algoritmo dias_semana
	Escribir "Ingrese los dias a mostrar"
	Leer d
	Dimension dias[d]
	semana(dias,d)
FinAlgoritmo
