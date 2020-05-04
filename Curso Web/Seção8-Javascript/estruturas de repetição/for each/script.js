var nomes = ['diana', 'pedro' , 'orochi', 'kefera', 'loli']

console.log(nomes)

var f = function(valor, indice){
	console.log(valor, indice)
}

nomes.forEach(f)

/*
nomes.forEach(function(valor,indice,array){
	//logica 
	console.log('indice ' + indice + ' | valor ' + valor)
	if (valor == 'orochi') {
		array[indice] = 'Soluço'
	}
})
console.log(nomes)
*/