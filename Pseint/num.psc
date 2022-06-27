Proceso salarios
	ENTEROS <- n
	ENTEROS <- X
	ENTEROS <- s
	ENTEROS <- h
	ENTEROS <- t
	ENTEROS <- suma
	Leer n
	x<-1
	suma<-0
	Mientras x <= n Hacer
		Leer h,t
		s<-h*t
		Escribir s
		suma<-suma+s
		x<-x+1
	Fin Mientras
	Escribir suma
FinProceso


