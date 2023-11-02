import random
Jugadas=['','piedra','papel','tijeras']
Puntos=0
for i in range(5):
    while True:
        resultado=input('\nEscoge una opción:\n1.Piedra\n2.Papel\n3.Tijeras\n\nOpcion: ')
        if(resultado!=""):
            resultado=int(resultado)
        if(resultado==1 or resultado==2 or resultado==3):
            break
    resultadoMaquina=random.randint(1,3)
    if(resultado==1 and resultadoMaquina==3):
        Puntos=Puntos+1
        print('Has ganado, '+Jugadas[resultado]+' gana a '+Jugadas[resultadoMaquina])
    elif(resultado==2 and resultadoMaquina==1):
        Puntos=Puntos+1
        print('Has ganado, '+Jugadas[resultado]+' gana a '+Jugadas[resultadoMaquina])
    elif(resultado==3 and resultadoMaquina==2):
        Puntos=Puntos+1
        print('Has ganado, '+Jugadas[resultado]+' gana a '+Jugadas[resultadoMaquina])
    elif(resultadoMaquina==1 and resultado==3):
        Puntos=Puntos-1
        print('Has perdido, '+Jugadas[resultado]+' pierde contra '+Jugadas[resultadoMaquina])
    elif(resultadoMaquina==2 and resultado==1):
        Puntos=Puntos-1
        print('Has perdido, '+Jugadas[resultado]+' pierde contra '+Jugadas[resultadoMaquina])
    elif(resultadoMaquina==3 and resultado==2):
        Puntos=Puntos-1
        print('Has perdido, '+Jugadas[resultado]+' pierde contra '+Jugadas[resultadoMaquina])
    else:
        print('Habeis Empatado')
if(Puntos>0):
    print('\nHas ganado')
elif(Puntos<0):
    print('\nHas perdido')
else:
    print('\nHabeis empatado')