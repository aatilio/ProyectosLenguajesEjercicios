class alumno():

    def Registrar_nombre(self):

        nombre = input("\n          Ingrese su nombre completo: ")
        caracteres = len(nombre)
        letras = 0
        for i in nombre:
            if i == " ":
                continue 
            letras += 1

        print("\n        Algoripmos y estructura de datos, alumno: ", nombre)
        print("        Ocupa ", caracteres, "caracteres o espacios")
        print("        Y tiene", letras, " letras")



    def Valor_entero(self):

        entero = int(input("\n          Ingrese un valor entero: "))
        print("\n           Se ingreso el valor de tipo entero: ", entero, "\n")

    def Valor_strimg(self):

        texto = str(input("\n        Ingrese una cadena de texto: "))
        print("\n           Se ingreso la cadena de texto: ", texto, "\n")


menu = """ 
_____________________________________
|                                   |
|        MENU DE OPCIONES           |
|                                   |
|    Registrar nombre       : 1     |
|    Valor entero           : 2     |
|    Valor string           : 3     |
|    Salir                  : 0     |
|___________________________________|
"""

print(menu)

opcion = int(input("        Escoja un opcion: "))

while opcion != 0:
    if opcion == 1:
        Alumno = alumno()
        Alumno.Registrar_nombre()

    elif opcion == 2:
        Alumno = alumno()
        Alumno.Valor_entero()
    elif opcion == 3:
        Alumno = alumno()
        Alumno.Valor_strimg()
    elif opcion == 0:
        #print("\n       Saliste del programa!")
        break;
    else:
        print("\n       Ingrese una opcion correctamente!!!!")
    print(menu)
    opcion = int(input("        Escoja un opcion: "))
