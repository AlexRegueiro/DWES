Adivinanzas = {
'Adivinanza': 'Nazco sin tener padre, y al morir vuelve a nacer mi madre.',
'Opciones': """ 
a) La nieve
b) Un huérfano
c) Un árbol 
""",
'Adivinanza2': 'Se viste el cielo de luces en cascada de colores, para alegrar a los que están más tristones.',
'Opciones2': """ 
a) Los fuegos artificiales
b) Arcoiris
c) Relámpagos
""",
'Adivinanza3': 'Te lo digo y te lo repito, y te lo puedo avisar, y por más que te lo diga no lo vas a adivinar.',
'Opciones3': """ 
a) Tu madre
b) El té
c) El intermitente
"""
}
contador=0
print(Adivinanzas.get('Adivinanza'))
print(Adivinanzas.get('Opciones'))
respuesta = input('Selecione una respuesta: ')
if respuesta=='a':
    print('Felicidades\n')
    contador=contador+10
else:
    print('Erroneo\n')
    contador=contador-5

print(Adivinanzas.get('Adivinanza2'))
print(Adivinanzas.get('Opciones2'))
respuesta = input('Selecione una respuesta: ')
if respuesta=='a':
    print('Felicidades\n')
    contador=contador+10
else:
    print('Erroneo\n')
    contador=contador-5

print(Adivinanzas.get('Adivinanza3'))
print(Adivinanzas.get('Opciones3'))
respuesta = input('Selecione una respuesta: ')
if respuesta=='b':
    print('Felicidades\n')
    contador=contador+10
else:
    print('Erroneo\n')
    contador=contador-5
    
contador=str(contador)
print('Puntuación total: '+contador)