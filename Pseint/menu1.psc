SubProceso menu()
	Escribir "1.- CUADRADO";
	Escribir "2.- RECTANGULO";
	Escribir "3.- TRIANGULO";
	Escribir "4.- PENTAGON0";
	Escribir "5.- SALIR";
	Escribir "";
	Escribir "Figura: ";
FinSubProceso

SubProceso calcular(op)
	Definir l1,l2 como Real;
	Leer fig
	Si fig == 1 Entonces
		Escribir "Ingrese el valor de un lado:";
		Leer l1;
		pt<-l1*4;
		Escribir "El perimetro del cuadrado es : ",pt;
	SiNo
		Si fig ==2 Entonces
			Escribir "Ingrese el valor de la base:";
			Leer l1;
			Escribir "Ingrese el valor de la altura :";
			Leer l2;
			pt<-(l1*2) + (l2*2);
			Escribir "El perimetro del rectangulo es : ",pt;
		SiNo 
			Si fig ==3 Entonces
				Escribir "Ingrese el valor del lado:";
				leer l1;
				pt<-l1*3;
				Escribir "El perimetro del triangulo es : ",pt;
			SiNo 
				Si fig ==4 Entonces
					Escribir "Ingrese el valor del lado:";
					leer l1;
					pt<-l1*5;
					Escribir "El perimetro del pentagono es : ",pt;
				FinSi
			FinSi
		FinSi
	FinSi
FinSubProceso

Algoritmo Ejercicio9
	Escribir " PERIMETROS DE FIGURAS"
	menu();
	calcular(pt);
FinAlgoritmo
