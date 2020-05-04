var lista_frutas = Array()
lista_frutas[0] = 'banana'
lista_frutas[1] = 'maça'

//console.log(lista_frutas)

//incluir elemento no final do array
lista_frutas.push('zimbabue')


//incluir elemento no inicio do array
lista_frutas.unshift('abacate')


//excluir elemento no final do array
lista_frutas.pop()


//excluir elemento no inicio do array
lista_frutas.shift()



var coisas = Array()

coisas['nomes'] = ['dominik', 'diana', 'joao', 'jose', 'ana']
coisas['idade'] = [10,22,30,12,18]

coisas['nomes'].push('ziraldo')
coisas['idade'].unshift(29)


coisas['nomes'].push('cleide')
coisas['idade'].unshift(34)

console.log(coisas)

coisas['nomes'].pop()
coisas['idade'].shift()

console.log(coisas)