class Ordenar():

    def Metodo_Shakes(self):
        sucursal = input("\n\tIngrese su nombre de la sucursal: ")
        n = int()
        ultimo = int()
        venta = float()
        print("\n\tIngrese el numero de meses a ordenar: ", end="")
        n = int(input())

        ultimo = n
        izquierda = 2
        derecha = n
        venta = [int() for ind0 in range(n)]

        print("\n\tINGRESO DE DIVIDENDOS DE CADA MES: \n")
        for i in range(1, n+1):
            print("\t\tMes ", i, end=" : ")
            venta[i-1] = int(input())

        while True:  # no hay 'repetir' en python | inicio del ordenamiento
            for i in range(derecha, izquierda-1, -1):  # derecha a izquierda
                if venta[i-2] > venta[i-1]:
                    num = venta[i-2]
                    venta[i-2] = venta[i-1]
                    venta[i-1] = num
                    ultimo = i
                    
            izquierda = ultimo+1
            for i in range(izquierda, derecha+1):  # izquierda a derecha
                if venta[i-2] > venta[i-1]:
                    num = venta[i-2]
                    venta[i-2] = venta[i-1]
                    venta[i-1] = num
                    ultimo = i
            izquierda = ultimo-1
            if izquierda < derecha:
                break  # Fin del ordenamiento

        print("\t______________________________________________\n\n\t\tNombre de la sucursal ", sucursal)
        print("\n\tVentas ordenadas de menor a mayor es: \n")
        for i in range(1, n+1):
            print("\t\t", venta[i-1])
        print("\n\tVentas ordenadas de mayor a meonor es: \n")
        for i in range(n, 0, -1):
            print("\t\t", venta[i-1])

    def Metodo_burbuja(self):
        print("\nIngrese la cantidad de datos a procesar: ", end="")
        n = int(input())
        vector = [int() for ind0 in range(n)]
        for i in range(1, n+1):
            print("\tPersona ", i, end=" : ")
            vector[i-1] = int(input())

        for i in range(1, n+1):
            min = i
            for j in range(i+1, n+1):                      
                if vector[j-1] > vector[min-1]: # con < ordena ascendente, con > ordena descendente
                    min = j
            aux = vector[i-1]
            vector[i-1] = vector[min-1]
            vector[min-1] = aux

        print("\nLas edades ordenadas de menor a mayor son:\n")
        for i in range(n, 0, -1):
            print("\t", vector[i-1])


menu = """
_____________________________________
|                                   |
|        MENU DE OPCIONES           |
|                                   |
|    ORDENAR INVENTARIO     : 1     |
|    ORDENAR EDADES         : 2     |
|    Salir                  : 0     |
|___________________________________|
"""


USUARIO = "Admin"
CONTRA = "123"
print("     _____________________________\n\n\t\tLOGUIN\n")
user = input("\t   Usuario : ")
pasw = input("\t   Password : ")
print("\n      _____________________________\n")


if user == USUARIO and pasw == CONTRA:
    print(menu)

    opcion = int(input("\tEscoja un opcion: "))

    while opcion != 0:
        if opcion == 1:
            invenatio = Ordenar()
            invenatio.Metodo_Shakes()

        elif opcion == 2:
            edades = Ordenar()
            edades.Metodo_burbuja()
        else:
            print("\n\tIngrese una opcion correctamente!!!!")
        print(menu)
        opcion = int(input("\tEscoja un opcion: "))
else:
    print("\tDatos incorectos")
