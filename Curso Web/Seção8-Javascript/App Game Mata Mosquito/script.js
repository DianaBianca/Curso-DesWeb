var altura  = 0 
var largura = 0 
var vidas   = 1
var tempo   = 10
var criaMoscaTempo = 1500
var nivel = window.location.search//recupera tudo que está a direita do ? 
nivel = nivel.replace('?','')

if (nivel === 'normal') {
	criaMoscaTempo = 1500
}else if (nivel === 'dificil') {
	criaMoscaTempo = 1000
}else if (nivel === 'chucknorris') {
	criaMoscaTempo = 750
}

function ajustaPalcoJogo(){

	altura  = window.innerHeight
    largura = window.innerWidth
    console.log(altura,largura)
}

ajustaPalcoJogo()

var cronometro = setInterval(function(){
	tempo -= 1
	if (tempo < 0) {
		clearInterval(cronometro)
		clearInterval(criaMosca)
		window.location.href = 'win.html'

	}else {
		document.getElementById('cronometro').innerHTML = tempo //valor será contido entre as tags span
	}
},1000)

function posicaoRandomica(){

	//remomver a mosca anterior, caso exista
	if (document.getElementById('mosca')) {
		
		document.getElementById('mosca').remove()//removendo o elemento selecionado
		
		if (vidas > 3) {
			window.location.href = 'Game_over.html'
		}else{

			document.getElementById('v'+ vidas).src = "imagens/coracao_vazio.png"
			vidas++
		}

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

function iniciarJogo(){
	var nivel = document.getElementById('nivel').value

	if (nivel === '') {
		alert('Selecione um nível para iniciar o jogo !')
		return false
	}

	window.location.href = 'game.html?'+ nivel // o ? serve para separar a pagina que 
	//nos queremos requisitar, dos paramentos que estamos passando pra essa pagina

}
