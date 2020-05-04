var lista_fruta = Array()

lista_fruta[0] = 'xaxim'
lista_fruta[1] = 'morango'
lista_fruta[2] = 'fruta pão'
lista_fruta[3] = 'amora'
lista_fruta[4] = 'gengibre'
lista_fruta[5] = 'mexirica'

console.log(lista_fruta)

console.log(lista_fruta.sort())


var lista_numero = Array(23,'123',54,'3',12,64,22)

console.log(lista_numero)

console.log(lista_numero.sort(ordena))

function ordena(a,b){
	return a-b
	//<0 = a ordenado antes de b
	// >0 = b é ordenado antes de a
	//== - a ordem é mantida

}
