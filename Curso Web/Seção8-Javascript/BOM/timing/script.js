//setTimeout(function(){document.write('teste')},2000)//2000 = 2segundos


var i = 5

var x = setInterval(function(){
	document.write(i + '<br>')
	i--
	if (i === 0) {
	   //window.location.reload()// looping infinito
	   clearInterval(x)
	}
},1000)