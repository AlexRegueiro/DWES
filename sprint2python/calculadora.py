from operaciones import sumar,restar,multiplicar,dividir
while True:
    num1=input('Introduzca un número: ')
    num2=input('Introduzca otro número: ')
    num1=int(num1)
    num2=int(num2)

    resultado=0
    repetir='n'

    while True:
        operacion=input('1.Sumar, 2.Restar, 3.Multiplicar, 4.Dividir: ')
        operacion=int(operacion)
        if (operacion > 0 and operacion < 5):
            break
        
    if operacion==1:
            print(sumar(num1, num2))
    if operacion==2:
            print(restar(num1, num2))
    if operacion==3:
            print(multiplicar(num1, num2))
    if operacion==4:
            print(dividir(num1, num2))
    while True:
        repetir=input('Quieres introducir más números?:(s/n) ')
        if (repetir=='s' or repetir=='n'):
            break
    if repetir=='n':
        break