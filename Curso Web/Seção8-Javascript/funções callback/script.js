function exibirArtigo(id , callbackSucesso, callbackErro){
	//recuperar o id via requisição http
	if (true) {
		callbackSucesso('Funções de callback em JS','funções de callback sao muito utilizadas..')
	}else{
		callbackErro('Erro ao recuperar os dados')
	}
}

var callbackSucesso = function(titulo, descricao){
	document.write('<h1>'+ titulo + '</h1><hr>')
	document.write('<p>'+ descricao + '</p>')
}

var callbackErro= function(erro){
	document.write('<p><b>Erro : </b>'+ erro + '</p><hr>')
}

exibirArtigo(1,callbackSucesso,callbackErro)
