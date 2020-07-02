$(document).ready(() => {
	$('#documentacao').on('click', () =>{
        //$('#pagina').load('documentacao.html')//carrega a pagina html , faz requisção get
        /*
        $.get('documentacao.html',valor =>{
            console.log(valor)
            $('#pagina').html(valor)

        })
        */

       $.post('documentacao.html',valor =>{
        console.log(valor)
        $('#pagina').html(valor)

    })

    })
    $('#suporte').on('click', () =>{
        /*
        //$('#pagina').load('suporte.html')//carrega a pagina html 

        $.get('suporte.html',valor =>{
            console.log(valor)
            $('#pagina').html(valor)

        })
        */
       $.get('suporte.html',valor =>{
        console.log(valor)
        $('#pagina').html(valor)

        })
    })
})