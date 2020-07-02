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

    //ajax
    $('competencia').on('change',e =>{
        //console.log($(e.target).val())
        let competencia = $(e.target).val()
        
        $.ajax({
            type:'GET',
            url: 'app.php',
            data:`competencia=${competencia}`,//x-www-form-urlencoded
            dataType:'json',
            success: (dados) =>{
                $('#numeroVendas').html(dados.numeroVendas)
                $('#totalVendas').html(dados.toalVendas)
            },
            error:(erro) => {console.log(erro)}
        })

        //metodo, url,dados, sucesso,erro
    })


})