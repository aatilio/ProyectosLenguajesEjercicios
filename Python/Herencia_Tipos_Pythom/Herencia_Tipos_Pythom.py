class vehiculo():

    def __init__(self, modelo, marca):  # CONSTRUCTOR
        self.modelo = modelo
        self.marca = marca
        self.acelera = False
        self.frena = False
        self.enmarcha = False

    def arrancar(self):  # METODOS
        self.enmarcha = True

    def acelerar(self):
        self.enmarcha = True

    def frenar(self):
        self.enmarcha = True

    def estado(self):
        print("MARCA: ", self.marca, "\nMODELO: ", self.modelo, "\nEN MARCHA: ",
    
    self.enmarcha, "\nACELERANDO: ", self.acelera, "\nFRENANDO: ", self.frena)


class Camioneta(vehiculo):
    def carga(self, cargar):
        self.cargado = cargar
        if(self.cargado):
            return "la furgoneta esta cargada"
        else:
            return "la fugoneta no esta cargada"


class Moto(vehiculo):
    hcaballito = ""

    def caballito(self):
        self.hcaballito = "Voy haciendo el CABALLITO"

    def estado(self):
        print("MARCA: ", self.marca, "\nMODELO: ", self.modelo, "\nEN MARCHA: ",

    self.enmarcha, "\nACELERANDO: ", self.acelera, "\nFRENANDO: ", self.frena,
    "\n", self.hcaballito)


miMoto = Moto("Pistera", "Honda")

miMoto.caballito()

miMoto.estado()

miCamioneta = Camioneta("QP", "RIVIAN")

miCamioneta.arrancar()
miCamioneta.estado()
print(miCamioneta.carga(True))
