/*	var area = largura * comprimento
	return area
}

var largura     = prompt('digite a largura')
var comprimento = prompt('digite o comprimento')

var tot = calcularAreaTerreno(largura,comprimento)
//document.write('o terreno possui :'+calcularAreaTerreno(largura,comprimento)+'m²')
document.write('o terreno possui :'+tot+'m²')

function calcularAreaTerreno(largura, comprimento){
	var area = largura * comprimento
	return area
}




function soma(a,b){
	b = b === undefined ? 0: b
	return a+b
}

console.log(soma(7,7))
console.log(soma(7,7,9,15))//desconsidera os demais
console.log(soma(7))//dá not a number , mas pode ser arrumado na função
console.log(soma())//dá not a number , mas pode ser arrumado na função
*/

function soma(){
	var resultado = 0
	for (var i in arguments ) {
		resultado += arguments[i]
	}

	return resultado
}

console.log(soma(7,5,3.2, 'texto'))