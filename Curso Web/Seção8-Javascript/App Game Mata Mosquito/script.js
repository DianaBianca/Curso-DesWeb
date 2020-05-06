var altura  = 0 
var largura = 0 

function ajustaPalcoJogo(){

	altura  = window.innerHeight
    largura = window.innerWidth
    console.log(altura,largura)
}

ajustaPalcoJogo()

function posicaoRandomica(){
	var posicaoX = Math.floor(Math.random() * largura) - 90
	var posicaoY = Math.floor(Math.random() *  altura) - 90

	// caso a posição seja inferior a 0 = ela recebe o valor de 0
	posicaoX = posicaoX < 0 ? 0 : posicaoX
	posicaoY = posicaoY < 0 ? 0 : posicaoY

	console.log(posicaoX,posicaoY)

	//criar o elemento html
	var mosca = document.createElement('img')
	mosca.src = 'imagens/mosca.png'
	mosca.className = 'mosquito1'   //atribuindo o elemento para a classe css
	
	mosca.style.left = posicaoX + 'px'//acessa atributos de estilo
	mosca.style.top = posicaoY + 'px'
	mosca.style.position = 'absolute' // para as coordenadas serem aplicadas, o elemento deve ser absoluto
	
	document.body.appendChild(mosca) //add um 'filho' para o body
}