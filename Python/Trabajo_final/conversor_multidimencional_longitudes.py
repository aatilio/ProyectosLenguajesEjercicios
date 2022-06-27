# Este codigo ha sido generado por el modulo psexport 20180802-w32 de PSeInt.
# Es posible que el codigo generado no sea completamente correcto. Si encuentra
# errores por favor reportelos en el foro (http://pseint.sourceforge.net).


if __name__ == '__main__':
	opc = int()
	opc2 = int()
	metros = float()
	pies = float()
	pulgadas = float()
	centimetros = float()
	tamano = float()
	convertido = float()
	magnitud = str()
	magnitud2 = str()
	sentinela = bool()
	sentinela = True
	print("POR FAVOR ELEGIR UNA OPCION")
	print("1: Convertir metros a otra magnitud")
	print("2: Convertir pies a otra magnitud")
	print("3: Convertir centimetros a otra magnitud")
	print("4: Convertir pulgadas a otra magnitud")
	while True:# no hay 'repetir' en python
		print("Introducir una opcion valida")
		opc = int(input())
		if opc==1 or opc==2 or opc==3 or opc==4: break
	while True:# no hay 'repetir' en python
		print("Ingresar la longitud a convertir")
		tamano = float(input())
		if tamano>=0: break
	while sentinela!=False:
		if opc==1 or opc==2 or opc==3 or opc==4:
			if opc==1:
				magnitud = "metros"
				print("POR FAVOR ELEGIR UNA OPCION")
				print("1:Convertir a pies")
				print("2:Convertir a centimetros")
				print("3:Convertir a pulgadas")
				opc2 = int(input())
				if opc2==1:
					magnitud2 = "pies"
					convertido = tamano*100/30.48
				else:
					if opc2==2:
						magnitud2 = "centimetros"
						convertido = tamano*100
					else:
						magnitud2 = "pulgadas"
						convertido = tamano*100/2.54
			elif opc==2:
				magnitud = "pies"
				print("POR FAVOR ELEGIR UNA OPCION")
				print("1:Convertir a metros")
				print("2:Convertir a centimetros")
				print("3:Convertir a pulgadas")
				opc2 = int(input())
				if opc2==1:
					magnitud2 = "metros"
					convertido = tamano/3.28
				else:
					if opc2==2:
						magnitud2 = "centimetros"
						convertido = tamano*30.48
					else:
						magnitud2 = "pulgadas"
						convertido = tamano*12
			elif opc==3:
				magnitud = "centimetros"
				print("POR FAVOR ELEGIR UNA OPCION")
				print("1:Convertir a pies")
				print("2:Convertir a metros")
				print("3:Convertir a pulgadas")
				opc2 = int(input())
				if opc2==1:
					magnitud2 = "pies"
					convertido = tamano/30.48
				else:
					if opc2==2:
						magnitud2 = "metros"
						convertido = tamano/100
					else:
						magnitud2 = "pulgadas"
						convertido = tamano/2.54
			elif opc==4:
				magnitud = "pulgadas"
				print("POR FAVOR ELEGIR UNA OPCION")
				print("1:Convertir a pies")
				print("2:Convertir a centimetros")
				print("3:Convertir a metros")
				opc2 = int(input())
				if opc2==1:
					magnitud2 = "pies"
					convertido = tamano*0.083334
				else:
					if opc2==2:
						magnitud2 = "centimetros"
						convertido = tamano*2.54
					else:
						magnitud2 = "metros"
						convertido = tamano*0.0254
			else:
				print("Ingesa un valor valido csm")
		if opc==5:
			sentinela = False
	print(tamano," ",magnitud," es igual a ",convertido," ",magnitud2)

