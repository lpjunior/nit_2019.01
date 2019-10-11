package br.com.senac.pizzariaweb.persistencia;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import br.com.senac.pizzariaweb.modelo.Cliente;

// classe responsável por fazer as transações com o banco de dados
public class ClienteDAO extends DAO {

	private Connection conn;
	
	public ClienteDAO() {

	}
	
	public void gravar(Cliente c) throws SQLException {
		try {
			conn = getConnection();
		} catch (SQLException e) {
			e.printStackTrace();
			System.out.println("ERRO AO TENTAR ABRIR A CONEXÃO");
		}
		
// serve preparar todos parametros da sua query, dentre outras coisas, ele protege contra ataques de SQL Injection
		
/* Pensando em SQL..
 * Query SQL para um SGBD
 * select * from cliente where nome like '%luis%';
 * 
 * Transformando para uma instrução Java / SQL
 * select * from cliente where nome like '% + nome + %';
 * Só que.. essa instrução acima é passiva de receber uma injeção de SQL, podendo receber uma instrução como:
 * '; delete * from cliente where nome like '
 * Com isso a query irá ficar dessa forma, qué totalmente válida para o SGBD
 * select * from cliente where nome like '%'; delete * from cliente where nome like '%';
 * O preparestatement irá tratar essa injeção, não deixando casos como esse ocorrer. 
 */
		PreparedStatement pstmt = null;
		
		/* try - serve para executar um bloco
		 * catch - ele executa alguma instrução caso ocorra uma exceção
		 * finally - ele sempre executa uma instrução indiferente do caso
		 * 
		 * try, catch, finally - podemos usar os 3 juntos
		 * ou somente try e catch
		 * ou try e finally 
		 */
		
		try {
			pstmt = conn.prepareStatement("insert into tb_cliente(nome, cpf, email, senha) values(?, ?, ?, md5(?))");
			
			pstmt.setString(1, c.getNome());
			pstmt.setString(2, c.getCpf());
			pstmt.setString(3, c.getEmailCliente());
			pstmt.setString(4, c.getSenhaCliente());
			
			int flag = pstmt.executeUpdate();
			
			/* 0 - false
			 * 1 - true
			 * */
			if(flag == 0) {
				throw new SQLException("Erro ao gravar no banco!");
			}
		} finally {
			if(conn != null) {
				conn.close();
			}
			if(pstmt != null) {
				pstmt.close();
			}
		}
	}
}
