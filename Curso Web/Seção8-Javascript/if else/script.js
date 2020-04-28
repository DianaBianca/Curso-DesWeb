var nome = 'Diana'

var teste = prompt('Digite seu nome')

if (nome != teste) {
	document.write('você não é a Diana')
}else{
	document.write('Oi '+nome+' Seja Bem Vinda')
}

document.write('<br><hr>')

var idade = prompt("digite a sua idade")

if (idade >= 18) {
	document.write('adulto')
}else if (idade >= 13) {
	document.write('adolescente')
}else{
	document.write('criança')
}

document.write('<br><hr>')

var media = 6
nota = prompt('digite sua nota')

if (nota > media) {
	document.write('Aprovado')
}else if (nota == media) {
	document.write('passou na risca hein minha filha')
}else{
	document.write('não foi dessa vez hein minha filha')
}