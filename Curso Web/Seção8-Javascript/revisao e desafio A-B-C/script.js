var a = 10
var b = 20
var c = null

document.write('<h2>var a = '+a+'<br></h2>')
document.write('<h2>var b = '+b+'<br></h2>')
document.write('<h2>var c = '+c+'<hr></h2>')

//lógica de inversão dos valores de a e b
c = b
b = a
a = c
c = null

document.write('<h2>Depois da inversão : <br></h2>')

document.write('<h2>var a = '+a+'<br></h2>')
document.write('<h2>var b = '+b+'<br></h2>')
document.write('<h2>var c = '+c+'<hr></h2>')




