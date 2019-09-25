<%@page import="br.com.senac.pizzariaweb.modelo.Cliente"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pizzaria Web 402</title>
</head>
<body>

	<!-- Os blocos de código Java incorporados na página, que nem fazíamos no PHP
		chama-se SCRIPTLET -->
		
		<%	
			// é equivalente ao 'echo' ou 'document.write()'
			out.print("Olá Java Web<br>");
		%>
		
		<%
			Cliente cli = new Cliente();
			// utilizando o método set
			cli.setNomeCliente("Anderson");
			// utilizando o método get
			out.println(cli.getNomeCliente());
		%>
</body>
</html>