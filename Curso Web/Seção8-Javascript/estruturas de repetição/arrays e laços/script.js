
var lista = Array('Diana','Bianca','João','Alberto')

for (var i = 0; i < lista.length; i++) {
	document.write(lista[i]+'<br>')
}

var frutas = Array()

frutas[0] = 'Banana'
frutas[1] = 'Maçã'
frutas[2] = 'Uva'
frutas[3] = 'Tomate'

var y = 0

while(y < frutas.length){
	//ação
	document.write(frutas[y] + '<br>')
	y++
}