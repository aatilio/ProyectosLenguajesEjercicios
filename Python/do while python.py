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

def insertar_vehiculos():
	print("Vehiculo ->")

if __name__ == '__main__':
	opc = int()
	while True:# no hay 'repetir' en python
		print("MENU VEHICULOS")
		print("Registrar un nuevo vehiculo   1")
		print("Buscar un vehiculo            2")
		print("Eliminar un vehiculo          3")
		print("Listar los vehiculo           4")
		print("Ingrese una opcion valida: ", end="")
		opc = int(input())
		if opc<0 or opc>4: break

