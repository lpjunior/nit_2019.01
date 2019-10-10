package br.com.senac.pizzariaweb.persistencia;
// FQN - Fully Qualified Name (nome do pacote + nome da classe)
// D.A.O - Data Access Object'

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class DAO {

	public DAO() {
		// tratamento de exce��o
		try { // � a tentativa de executar um ou mais linhas de comando
			Class.forName("com.mysql.jdbc.Driver"); // informar qual a classe iremos utilizar como a interface entre o webapp e o SGBD
		} catch (ClassNotFoundException cnfe) { // � a a��o a ser tomada quando ocorre um erro dentro do try
			cnfe.printStackTrace();
			System.out.println("Classe Driver n�o encontrada. Erro: " + cnfe.getMessage());
		}
	}
	
	// todas as classes respons�veis pela transa��o de dados QUE IREMOS trabalhar
	// ser�o do pacote java.sql
	public Connection getConnection() throws SQLException {
		// mysqli_connection("url_server", "usuario", "senha", "BD");
		return DriverManager.getConnection("jdbc:mysql://localhost:3306/pizzariaweb", "root", "");
		// JDBC - Java Database Connection
	}
}
