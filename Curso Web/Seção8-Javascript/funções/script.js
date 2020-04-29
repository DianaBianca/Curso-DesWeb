/*	var area = largura * comprimento
	return area
}*/

var largura     = prompt('digite a largura')
var comprimento = prompt('digite o comprimento')

var tot = calcularAreaTerreno(largura,comprimento)
//document.write('o terreno possui :'+calcularAreaTerreno(largura,comprimento)+'m²')
document.write('o terreno possui :'+tot+'m²')

function calcularAreaTerreno(largura, comprimento){
	var area = largura * comprimento
	return area
}