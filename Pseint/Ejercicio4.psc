SubProceso costo_compra(dis,precios,na)
	Escribir "Costo total de las compras :"
	ct<-0
	Para i=1 Hasta na Hacer
		Escribir dis[i]," -> " sin saltar
		Escribir precios[i]
		ct=ct+precios[i]
	FinPara
	Escribir "El costo total de las compras es " ct
Fin SubProceso

SubProceso costo_dis(dis,precios,na)
	Para i=1 Hasta na Hacer
		Escribir "Ingrese el precio para el ", dis[i],":"
		Leer precios[i]
	FinPara
Fin SubProceso

SubProceso dispositivos(dis,na)
	Para i=1 Hasta na Hacer
		Escribir "Introduce el nombre del ",i,"° dispositivo:"
		Leer dis[i]
	FinPara
Fin SubProceso

SubProceso principal()
	Escribir "Ingrese la cantidad de dispositivos a comprar"
	Leer na
	Dimension dis[na]
	dispositivos(dis,na)
	Dimension precios[na]
	costo_dis(dis,precios,na)
	Dimension scal[na]
	costo_compra(dis,precios,na)
Fin SubProceso

Algoritmo Ejercicio4
	principal
FinAlgoritmo
