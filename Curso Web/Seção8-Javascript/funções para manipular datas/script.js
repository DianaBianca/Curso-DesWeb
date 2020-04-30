var data = new Date()

//document.write(data.getDate() + '/' + (data.getMonth() + 1) +'/'+ data.getFullYear())

//add ou remover dias 

document.write(data.toString())
data.setDate(data.getDate()+10)
document.write('<hr>')
document.write('<br>')
document.write(data.toString())
document.write('<hr>')
document.write('<br>')

//add ou remover meses 

document.write(data.toString())
data.setMonth(data.getMonth()-10)
document.write('<hr>')
document.write('<br>')
document.write(data.toString())
document.write('<hr>')
document.write('<br>')

//add ou remover anos 

document.write(data.toString())
data.setFullYear(data.getFullYear()-10)
document.write('<hr>')
document.write('<br>')
document.write(data.toString())
document.write('<hr>')
document.write('<br>')


//15/01/2017
var data1 = new Date(2017, 0, 15)

//23/02/2017
var data2 = new Date(2017, 1, 23)
document.write(data1.toString())
document.write('<br>')
document.write(data2.toString())
document.write('<br> <br>')

//converter as datas em algo que se possa calcular
document.write(data1.getTime())
document.write('<br>')
document.write(data2.getTime())
document.write('<br><br>')

var ms_datas = Math.abs(data1.getTime() -data2.getTime())
//encontrar a quantidade de ms entre as datas
document.write(ms_datas)
document.write('<br>')

//1 dia tem 24 hrs, cada hr tem 60 minutos
//cada min tem 60 segnundos
//cada segundo tem 1000 ms
//quantos ms tem um dia?


var ms_dia = 1*24*60*60*1000
document.write('1 dia tem : '+(1*24*60*60*1000)+ ' milissegundos')
document.write('<br><br>')

document.write('a diferença entre as datas é de :'+Math.ceil(ms_datas/ ms_dia)+ ' dias')
