SubProceso tablas<-operacion(espacio)
	Para i<-0 Hasta 12 Con Paso 1 Hacer
		espacio<-espacio+" "
	FinPara
	tablas<-Subcadena(espacio,0,12);
FinSubProceso

Algoritmo Ejercicio10
	Escribir "Ingrese la cantidad de tablas a mostrar"
	Leer num
	Escribir " " 
	Mientras (i<13) Hacer
		var<-"";
		Para n<-1 Hasta num Con Paso 1 Hacer
			var<-var+ " " + operacion(ConvertirATexto(n)+" x "+ConvertirATexto(i)+" = "+ConvertirATexto(n*i))+ " | ";
		Fin Para
		Escribir var;
		i<-i+1;
	Fin Mientras
FinAlgoritmo
