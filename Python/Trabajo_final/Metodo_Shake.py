# Este codigo ha sido generado por el modulo psexport 20180802-w32 de PSeInt.
# Es posible que el codigo generado no sea completamente correcto. Si encuentra
# errores por favor reportelos en el foro (http://pseint.sourceforge.net).


if __name__ == '__main__':

	print("Ingrese la cantidad de datos a procesar: ", end="")
	n = int(input())
	vector = [int() for ind0 in range(n)]
	print("Ingreso de datos por teclado: ")
	for i in range(1,n+1):
		print("posicion ",i, end="")
		vector[i-1] = int(input())
	print("vector origianl ")
	for i in range(1,n+1):
		print(vector[i-1]," ", end="")
	print("")
	ultimo = n
	derecha = n
	izquierda = 2
	while True:# no hay 'repetir' en python
		for i in range(derecha,izquierda,-1):
			if vector[i-2] > vector[i-1]:
				num = vector[i-2]
				vector[i-2] = vector[i-1]
				vector[i-1] = num
				ultimo = i
		izquierda = ultimo + 1
		for i in range(izquierda,derecha+1):
			if vector[i-2] > vector[i-1]:
				num = vector[i-2]
				vector[i-2] = vector[i-1]
				vector[i-1] = num
				ultimo = i
		izquierda = ultimo - 1
		if izquierda<derecha: break
	print("El vector ordenado de mayor a menor es:")
	for i in range(1,n+1):
		print(vector[i-1]," ", end="")
	print("")
	print("El vector ordenado de menor a mayor es:")
	for i in range(n,0,-1):
		print(vector[i-1]," ", end="")

