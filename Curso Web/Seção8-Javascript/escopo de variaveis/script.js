//3 escopos: global, função e o bloco

var serie = 'Friends'

if (true) {//escopo de bloco
	var serie2 = 'GITH'
	document.write(serie)
}
document.write(serie2)

function x(){
	serie3 = 'TWD'
	document.write(serie)
	document.write(serie2)

}

x()