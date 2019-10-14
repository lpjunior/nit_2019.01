package br.com.senac.pizzariaweb.persistencia;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import br.com.senac.pizzariaweb.modelo.Cliente;

// classe respons�vel por fazer as transa��es com o banco de dados
public class ClienteDAO extends DAO {

	private Connection conn;
	
	public ClienteDAO() {

	}
	
	public int gravar(Cliente c) throws SQLException {
		try {
			conn = getConnection();
		} catch (SQLException e) {
			e.printStackTrace();
			System.out.println("ERRO AO TENTAR ABRIR A CONEX�O");
		}
		
// serve preparar todos parametros da sua query, dentre outras coisas, ele protege contra ataques de SQL Injection
		
/* Pensando em SQL..
 * Query SQL para um SGBD
 * select * from cliente where nome like '%luis%';
 * 
 * Transformando para uma instru��o Java / SQL
 * select * from cliente where nome like '% + nome + %';
 * S� que.. essa instru��o acima � passiva de receber uma inje��o de SQL, podendo receber uma instru��o como:
 * '; delete * from cliente where nome like '
 * Com isso a query ir� ficar dessa forma, qu� totalmente v�lida para o SGBD
 * select * from cliente where nome like '%'; delete * from cliente where nome like '%';
 * O preparestatement ir� tratar essa inje��o, n�o deixando casos como esse ocorrer. 
 */
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		/* try - serve para executar um bloco
		 * catch - ele executa alguma instru��o caso ocorra uma exce��o
		 * finally - ele sempre executa uma instru��o indiferente do caso
		 * 
		 * try, catch, finally - podemos usar os 3 juntos
		 * ou somente try e catch
		 * ou try e finally 
		 */
		
		try {
			pstmt = conn.prepareStatement("insert into tb_cliente(nome, cpf, email, senha) values(?, ?, ?, md5(?))", PreparedStatement.RETURN_GENERATED_KEYS);
			
			pstmt.setString(1, c.getNome());
			pstmt.setString(2, c.getCpf());
			pstmt.setString(3, c.getEmailCliente());
			pstmt.setString(4, c.getSenhaCliente());
			
			/* 0 - false
			 * 1 - true
			 * */
			int flag = pstmt.executeUpdate();
			int id;
			if(flag != 0) {				
				rs = pstmt.getGeneratedKeys();
				rs.next();
				id = rs.getInt(1);
			}else {
				throw new SQLException("Erro ao gravar no banco!");
			}
			
			return id;
		} finally {
			if(conn != null) {
				conn.close();
			}
			if(pstmt != null) {
				pstmt.close();
			}
			if(rs != null) {
				rs.close();
			}
		}
	}
	
	public List<Cliente> listar() throws SQLException {
		PreparedStatement pstmt = null;
		ResultSet rs = null;
		
		try {
			pstmt = conn.prepareStatement("select * from tb_cliente");
			
			rs = pstmt.executeQuery(); // pstmt.executeQuery() - m�todo respons�vel por disparar querys de consulta no banco e retornar o resultado
			
			List<Cliente> clientes = new ArrayList<Cliente>();
			Cliente c;
			while(rs.next()) { // rs.next() - valida se existe um valor e anda o cursor
				// monta o obj de cliente
				c = new Cliente();
				c.setId(rs.getInt(1));
				c.setNome(rs.getString(2));
				c.setCpf(rs.getString(3));
				c.setEmailCliente(rs.getString(4));
				
				// atribui o obj de cliente a lista
				clientes.add(c);
			}
			
			 return clientes;
		} finally {
			if(conn != null) {
				conn.close();
			}
			if(pstmt != null) {
				pstmt.close();
			}
			if(rs != null) {
				rs.close();
			}
		}
	}
}
