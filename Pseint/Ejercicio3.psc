SubAlgoritmo tel_movil()
	Escribir "Ingrese su numero de telefono movil"
	Leer tel
	Si tel < 9999999 Entonces
		Escribir "No es un telefono movil"
		Escribir "Tienen que ser 9 digitos"
	FinSi
FinSubAlgoritmo

SubAlgoritmo tel_fijo()
	Escribir "Ingrese su numero de telefono fijo"
	Leer tel
	Si tel > 9999999 Entonces
		Escribir "No es un tel�fono fijo"
		Escribir "Tienen que ser 7 d�gitos"
	FinSi
FinSubAlgoritmo

Algoritmo Ejercicio3
	Escribir "Tiene numero telef�nico"
	Leer res
	Si res ="no" Entonces
		Escribir "Usted no tiene numero telef�nico"
	SiNo
		Si res = "si" Entonces
			Escribir "Que tipo de tel�fono posee"
			Leer telef
			Si telef= "tel�fono fijo" Entonces
				tel_fijo()
			SiNO 
				Si telef="tel�fono m�vil" Entonces
					tel_movil()
				FinSI
			FinSi
		SiNo
			Escribir "El numero es m�vil"
		FinSi
	FinSi
FinAlgoritmo