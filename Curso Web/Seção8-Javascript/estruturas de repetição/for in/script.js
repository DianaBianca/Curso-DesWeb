var convidados = ['Diana', 'João', 'Ana', 'Pedro']
convidados[10] = 'Marina'
convidados['a'] = 'Mari'
convidados[-1] = 'Maia'
convidados[true] = 'ana'
for (var x in convidados) {
	document.write('indice : '+ x + '  valor : '+ convidados[x] + '<br>')
}