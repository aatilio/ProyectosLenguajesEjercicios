class Coche():

    def __init__(self):  #-> CONSTRUCTOR
        self.__largo = 250          #__ENCAPSULAMIENTO
        self.__ancho = 145          #__encapsulamiento
        self.__ruedas = 4           #__encapsulamiento
        self.__enmarcha = False     #__encapsulamiento __estado inicial 
      

    def arrancar(self,arrancamos):      #METODOS
        self.__enmarcha=arrancamos

        if(self.__enmarcha):
            chequeo=self.__chequeo_interno()

        if(self.__enmarcha and chequeo):
            return "el coche esta en marcha "
        elif(self.__enmarcha and chequeo == False):
            return "Algo ha salido mal en el chequeo, no podemos arrancar"
        else:
            return "El coche esta detenido"

    def estado(self):
        print("El coche tiene ", self.__ruedas, " ruedas. \nAncho de ", self.__ancho,"\nLargo de ",
              self.__largo)
      
    def __chequeo_interno(self):
        print("Realizando chequeo interno")

        self.gasolina="Ok"
        self.aceite="Ok"                #APSTRACCION
        self.puertas="Cerradas"

        if(self.gasolina=="Ok" and self.aceite=="Ok" and self.puertas=="Cerradas"):
            return True
        else:
            return False

miCoche1=Coche()        #INSTANCIA 1
print(miCoche1.arrancar(True)) 
miCoche1.estado()
#print(miCoche.__chequeo_interno)

print("______A continiacion creamos la segunda instancia_______")

miCoche2=Coche()        #INSTANCIA 2
print(miCoche2.arrancar(False))
miCoche2.estado()


