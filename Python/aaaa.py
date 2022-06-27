class Coche():
    largo = 250
    ancho = 145
    ruedas = 4
    enmarcha = False

    def arrancar(self):
        self.enmarcha = True

    def estado(self):
        if(self.enmarcha):
            return "el coche esta en marcha "
        else:
            return "El coche esta detenido"
        


miCoche=Coche()

print("El largo del coche es: ", miCoche.largo)
print("El coche tiene  ", miCoche.ruedas, " ruedas ")


print(miCoche.estado)