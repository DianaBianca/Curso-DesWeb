var tabuada = prompt('digite a tabuada desejada')
var i = 0

document.write('TABUADA USANDO O FOR <br>')
for (i ; i <= 10; i++) {
	var tot = tabuada * i
	document.write(tabuada + ' X ' + i + ' = ' + tot)
	document.write('<br>')
}
document.write('<hr><br>')

document.write('TABUADA USANDO O WHILE <br>')
i = 0
while(i <= 10){
	var tot = tabuada * i
	document.write(tabuada + ' X ' + i + ' = ' + tot)
	document.write('<br>')
	i++
}
document.write('<hr><br>')

document.write('TABUADA USANDO O DO-WHILE <br>')
i = 0
do{
	var tot = tabuada * i
	document.write(tabuada + ' X ' + i + ' = ' + tot)
	document.write('<br>')
	i++
}while(i <= 10)
document.write('<hr><br>')