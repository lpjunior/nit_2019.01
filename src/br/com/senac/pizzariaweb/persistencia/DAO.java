package br.com.senac.pizzariaweb.persistencia;
// FQN - Fully Qualified Name (nome do pacote + nome da classe)
// D.A.O - Data Access Object'

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DAO {

	public DAO() {
		// tratamento de exceção
		try { // é a tentativa de executar um ou mais linhas de comando
			Class.forName("com.mysql.jdbc.Driver"); // informar qual a classe iremos utilizar como a interface entre o webapp e o SGBD
		} catch (ClassNotFoundException cnfe) { // é a ação a ser tomada quando ocorre um erro dentro do try
			cnfe.printStackTrace();
			System.out.println("Classe Driver não encontrada. Erro: " + cnfe.getMessage());
		}
	}
	
	// todas as classes responsáveis pela transação de dados QUE IREMOS trabalhar
	// serão do pacote java.sql
	public Connection getConnection() throws SQLException {
		// mysqli_connection("url_server", "usuario", "senha", "BD");
		return DriverManager.getConnection("jdbc:mysql://localhost:3306/pizzariaweb", "root", "");
		// JDBC - Java Database Connection
	}
}
