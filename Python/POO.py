def ciclo():
    print("1.-  Ciclo III")
    print("2.-  Ciclo VII")


def eleccion():
    promed = float()
    contadordes = int()
    contadorapro = int()
    contadorapro = 0
    contadordes = 0
    notas = [float() for ind0 in range(5)]
    opc = float(input("Seleccione una opcion : "))
    if opc == 1:
        print("INGRESO DE NOTAS ")
        for i in range(1, 6):
            print("NOTA ", i, ":  ", end="")
            notas[i-1] = float(input())
            if notas[i-1] < 13:
                contadordes = contadordes+1
            else:
                contadorapro = contadorapro+1
            promed = promed+notas[i-1]
        promedio = promed/5
        if promedio >= 18 and promedio <= 20:
            print("puede cursar 25 creditos y tiene un descuento del 25% ")
            creditos = 25
            variable = creditos % 5
            mul = creditos-variable
            num = mul/5
            descuento = (35*num)*0.25
        if promedio >= 16 and promedio < 18:
            print("Puede cursar 22 creditos y tiene un descuento del 10% ")
            creditos = 22
            variable = creditos % 5
            exedente = variable*7
            mul = creditos-variable
            num = mul/5
            descuento = ((35*num)*0.1)+exedente
        if promedio >= 14 and promedio < 16:
            print("Puede cursar 22 creditos y no tiene descuento ")
            creditos = 22
            variable = creditos % 5
            exedente = variable*7
            mul = creditos-variable
            num = mul/5
            descuento = ((35*num)*0)+exedente
            print("Tiene ", contadordes, " curso(os) desaprovado(os) ")
            print("Tiene ", contadorapro, " curso(os) aprovado(os) ")
        if promedio < 14:
            if contadordes <= 2:
                print("Puede cursar 18 creditos y no tiene descuento ")
                creditos = 18
                variable = creditos % 5
                exedente = variable*7
                mul = creditos-variable
                num = mul/5
                descuento = ((35*num)*0)+exedente
            if contadordes >= 3:
                print("Puede cursar 15 creditos y no tiene descuento ")
                creditos = 15
                variable = creditos % 5
                exedente = variable*7
                mul = creditos-variable
                num = mul/5
                descuento = ((35*num)*0)+exedente
            print("Tiene ", contadordes, " curso(os) desaprovado(os) ")
            print("Tiene ", contadorapro, " curso(os) aprovado(os) ")
        print("El alumno debe de pagar ", 35*num-descuento)
    elif opc == 2:
        print("INGRESO DE NOTAS ")
        for i in range(1, 6):
            print("NOTA ", i, ":  ", end="")
            notas[i-1] = float(input())
            if notas[i-1] < 13:
                contadordes = contadordes+1
            else:
                contadorapro = contadorapro+1
            promed = promed+notas[i-1]
        promedio = promed/5
        if promedio >= 18 and promedio <= 20:
            print("puede cursar 25 creditos y tiene un descuento del 20% ")
            creditos = 25
            variable = creditos % 5
            mul = creditos-variable
            num = mul/5
            descuento = (50*num)*0.2
        if promedio < 18:
            print("Puede cursar 25 creditos y no tiene descuento ")
            creditos = 25
            variable = creditos % 5
            exedente = variable*7
            mul = creditos-variable
            num = mul/5
            descuento = ((50*num)*0)+exedente
        print("Tiene ", contadordes, " curso(os) desaprovado(os) ")
        print("Tiene ", contadorapro, " curso(os) aprovado(os) ")
        print("El alumno debe de pagar ", 50*num-descuento)


if __name__ == '__main__':
    ciclo()
    eleccion()
