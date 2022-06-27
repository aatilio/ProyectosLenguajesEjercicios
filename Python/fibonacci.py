# Este codigo ha sido generado por el modulo psexport 20180802-w32 de PSeInt.
# Es posible que el codigo generado no sea completamente correcto. Si encuentra
# errores por favor reportelos en el foro (http://pseint.sourceforge.net).


if __name__ == '__main__':
	print("ingrese un numero")
	n = float(input())
	a = 0
	b = 1
	for i in range(1,n+1):
		print(a)
		c = a+b
		a = b
		b = c

