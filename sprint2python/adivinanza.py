Adivinanzas = {
'Adivinanza': 'Nazco sin tener padre, y al morir vuelve a nacer mi madre.',
'Opcion a': 'La nieve',
'Opcion b': 'Un huérfano',
'Opcion c': 'Un árbol'
}
print(Adivinanzas.get('Adivinanza'))
print('a) '+Adivinanzas.get('Opcion a'))
print('b) '+Adivinanzas.get('Opcion b'))
print('c) '+Adivinanzas.get('Opcion c'))
respuesta = input('Selecione una respuesta: ')
if respuesta=='a':
    print('Felicidades')
else:
    print('Erroneo')
