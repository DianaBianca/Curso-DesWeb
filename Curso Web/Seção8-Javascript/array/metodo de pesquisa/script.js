var lista_frutas = Array()
lista_frutas[0] = 'banana'
lista_frutas[1] = 'maça'
lista_frutas[2] = 'abacate'
lista_frutas[3] = 'mamão'
lista_frutas[4] = 'berinjela'
lista_frutas[5] = 'macaxeira'

console.log(lista_frutas)

//console.log(lista_frutas.indexOf('maça'))

var auxiliar = lista_frutas.indexOf('mça')

if (auxiliar === -1) {
	console.log('Elemento inexistente')
}else {
	console.log('elemento existe na posição : '+ auxiliar )
}