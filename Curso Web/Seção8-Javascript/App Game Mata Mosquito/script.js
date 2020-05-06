var altura  = 0 
var largura = 0 
var vidas = 1

function ajustaPalcoJogo(){

	altura  = window.innerHeight
    largura = window.innerWidth
    console.log(altura,largura)
}

ajustaPalcoJogo()

function posicaoRandomica(){

	//remomver a mosca anterior, caso exista
	if (document.getElementById('mosca')) {
		
		document.getElementById('mosca').remove()//removendo o elemento selecionado
		document.getElementById('v'+ vidas).src = "imagens/coracao_vazio.png"

		if (vidas > 3) {
			alert('interromper o jogo( GAME OVER BB)')
		}

		vidas++


	}

	var posicaoX = Math.floor(Math.random() * largura) - 90
	var posicaoY = Math.floor(Math.random() *  altura) - 90

	// caso a posição seja inferior a 0 = ela recebe o valor de 0
	posicaoX = posicaoX < 0 ? 0 : posicaoX
	posicaoY = posicaoY < 0 ? 0 : posicaoY

	console.log(posicaoX,posicaoY)

	//criar o elemento html
	var mosca = document.createElement('img')
	
	mosca.src = 'imagens/mosca.png'
	
	mosca.className = tamanhoAleatorio() +' '+ ladoaleatorio()  //atribuindo o elemento para a classe css
	
	mosca.style.left = posicaoX + 'px'//acessa atributos de estilo
	mosca.style.top = posicaoY + 'px'
	mosca.style.position = 'absolute' // para as coordenadas serem aplicadas, o elemento deve ser absoluto
	
	mosca.id = 'mosca'

	mosca.onclick = function(){
		this.remove()
	}

	document.body.appendChild(mosca) //add um 'filho' para o body
	
}

function tamanhoAleatorio(){
	var classe = Math.floor( Math.random() * 3)
	
	switch(classe){
		case 0:
			return 'mosquito1'
		case 1:
			return 'mosquito2'
		case 2:
			return 'mosquito3'
	}
}

function ladoaleatorio(){
	var classe = Math.floor( Math.random() * 2)
	
	switch(classe){
		case 0:
			return 'ladoA'
		case 1:
			return 'ladoB'
	}
}