# Este codigo ha sido generado por el modulo psexport 20180802-w32 de PSeInt.
# Es posible que el codigo generado no sea completamente correcto. Si encuentra
# errores por favor reportelos en el foro (http://pseint.sourceforge.net).


# En python no hay forma de elegir como pasar una variable a una
# funcion (por referencia o por valor). Las variables "inmutables"
# (str, int, float, bool) se pasan siempre por copia mientras que
# las demas (listas, objetos, etc.) se pasan siempre por referencia.
# Esto coincide con el comportamiento por defecto en pseint, pero
# cuando utiliza las palabras clave "Por Referencia" para
# alterarlo la traducción no es correcta.

def menu():
	print("1.- Archivo")
	print("2.- Editar")
	print("3.- Configurar")
	print("4.- Ejecutar")
	print("5.- Ayuda")
	print("6.- Salir ")

def eleccion():
	print("_______________________________________________")
	print("Seleccione una opcion :")
	op = float(input())
	if op==1:
		print(" - ABRIR NUEVO ARCHIVO")
		print(" - ABRIR UN ARCHIVO YA CREADO")
		print(" - GUARDAR UN ARCHIVO")
		print(" - GUARDAR UN NUEVO ARCHIVO")
		input() # a diferencia del pseudocódigo, espera un Enter, no cualquier tecla
	elif op==2:
		print(" - DESHASER UN ARCHIVO")
		print(" - REHACER UN ARCHIVO")
		print(" - CORTAR UN ARCHIVO")
		print(" - COPIAR UN ARCHIVO")
		print(" - PEGAR UN ARCHIVO")
	elif op==3:
		print(" - ASISTENCIAS")
		print(" - PRESENTACION")
	elif op==4:
		print(" - EJECUTAR")
		print(" - EJECUTAR PASO A PASO")
		print(" - EJECUCION EXPLICADA")
	elif op==5:
		print(" - INDICE")
		print(" - AYUDA RAPIDA")
		print(" - EJEMPLOS")
		input() # a diferencia del pseudocódigo, espera un Enter, no cualquier tecla
	else:
		print("Cerrar Programa")

if __name__ == '__main__':
	print("_______________________________________________")
	print("Has iniciado sesion en Pseint")
	print("_______________________________________________")
	print(" ")
	MENU()
	ELECCION()

