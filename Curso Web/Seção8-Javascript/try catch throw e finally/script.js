
var video = Array()

video[1] = Array()
video[1]['nome'] = 'Fullmetal Alchemist'
video[1]['categoria'] = 'anime'

function getVideo(video){
	//logica
	try{
		console.log(video[0]['nome'])
	}catch(erro){//pode usar qualquer nome de parametro
		tratarErro(erro)
		console.log('agora sim podemos tratar esse erro')
		throw new Error('houve um erro mas houve um erro, mas não se preocupe, estamos trabalhando nisso agora !!')
			}finally{
		console.log('Sempre passa por aqui (try/catch)')
	}
	console.log('A aplicação nao morreu')

}

function tratarErro(e){
	//logica para registrar o erro no servidor
	console.log(e)
}

getVideo(video)