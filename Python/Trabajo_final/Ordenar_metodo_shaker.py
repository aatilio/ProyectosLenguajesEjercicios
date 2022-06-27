# Este codigo ha sido generado por el modulo psexport 20180802-w32 de PSeInt.
# Es posible que el codigo generado no sea completamente correcto. Si encuentra
# errores por favor reportelos en el foro (http://pseint.sourceforge.net).


if __name__ == '__main__':
	i = float()
	n = float()
	ultimo = float()
	venta = int()
	print("Ingrese el numero de meses a ordenar: ", end="")
	n = int(input())
	ultimo = n
	izquierda = 2
	derecha = n
	venta = [int() for ind0 in range(n)]
	print("INGRESO DE DIVIDENDOS DE CADA MES: ")
	for i in range(1,n+1):
		print("posicion ",i, end="")
		venta[i-1] = int(input())
	print("VENTAS POR MES  ")
	for i in range(1,n+1):
		print(venta[i-1]," ")
	print("")
	while True:# no hay 'repetir' en python
		for i in range(derecha,izquierda-1,-1):
			if venta[i-2]>venta[i-1]:
				num = venta[i-2]
				venta[i-2] = venta[i-1]
				venta[i-1] = num
				ultimo = i
		izquierda = ultimo+1
		for i in range(izquierda,derecha+1):
			if venta[i-2]>venta[i-1]:
				num = venta[i-2]
				venta[i-2] = venta[i-1]
				venta[i-1] = num
				ultimo = i
		izquierda = ultimo-1
		if izquierda<derecha: break
	print("El vector ordenado de mayor a menor es:")
	for i in range(1,n+1):
		print(venta[i-1]," ")
	print("")
	print("El vector ordenado de menor a mayor es:")
	for i in range(n,0,-1):
		print(venta[i-1])

