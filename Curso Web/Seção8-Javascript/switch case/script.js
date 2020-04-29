var idade = prompt('digite sua idade')
valor  = parseInt(idade)
switch(valor){
	case 18:
		document.write('agora voce é oficialmente adulto')
		break
	case 50:
		document.write('agora voce pode começar a pensar na aposentadoria')
		break
	case 13:
		document.write('agora voce é oficialmente adolescente')
		break
	default :
		document.write('seja feliz')
}