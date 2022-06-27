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
		Escribir "No es un teléfono fijo"
		Escribir "Tienen que ser 7 dígitos"
	FinSi
FinSubAlgoritmo

Algoritmo Ejercicio3
	Escribir "Tiene numero telefónico"
	Leer res
	Si res ="no" Entonces
		Escribir "Usted no tiene numero telefónico"
	SiNo
		Si res = "si" Entonces
			Escribir "Que tipo de teléfono posee"
			Leer telef
			Si telef= "teléfono fijo" Entonces
				tel_fijo()
			SiNO 
				Si telef="teléfono móvil" Entonces
					tel_movil()
				FinSI
			FinSi
		SiNo
			Escribir "El numero es móvil"
		FinSi
	FinSi
FinAlgoritmo