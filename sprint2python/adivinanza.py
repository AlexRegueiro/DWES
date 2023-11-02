import random
Adivinanzas= [
    {'Adivinanza':'Nazco sin tener padre, y al morir vuelve a nacer mi madre.', 
     'Opciones':' a) La nieve\n b) Un huérfano\n c) Un árbol',
     'resultado':'a'},
    {'Adivinanza':'Se viste el cielo de luces en cascada de colores, para alegrar a los que están más tristones.',
     'Opciones':' a) Los fuegos artificiales\n b) Arcoiris\n c) Relámpagos',
     'resultado':'a'},
    {'Adivinanza':'Te lo digo y te lo repito, y te lo puedo avisar, y por más que te lo diga no lo vas a adivinar.',
     'Opciones':' a) Tu madre\n b) El té\n c) El intermitente',
     'resultado':'b'}
]
contador=0


for Adivinanza in random.sample(Adivinanzas,2):
    print('\n')
    print(Adivinanza['Adivinanza'])
    print(Adivinanza['Opciones'])
    resultado=input('Escoge una opción: ')
    if resultado==Adivinanza['resultado']:
        print('\nFelicidades')
        contador=contador+10
    else:
        print('\nErroneo')
        contador=contador-5

contador=str(contador)
print('Total de puntuación: '+contador)