$(document).ready(() => {
	$('#documentacao').on('click', () =>{
        $('#pagina').load('documentacao.html')//carrega a pagina html 

    })
    $('#suporte').on('click', () =>{
        $('#pagina').load('suporte.html')//carrega a pagina html 
        
    })
})