package br.com.senac.pizzariaweb.persistencia;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import br.com.senac.pizzariaweb.modelo.Funcionario;

public class FuncionarioDAO extends DAO {

	private Connection conn;
	
	public FuncionarioDAO() {

	}
	
	public void gravar(Funcionario f) throws SQLException {
		try {
			conn = getConnection();
		} catch (SQLException e) {
			e.printStackTrace();
			System.out.println("ERRO AO TENTAR ABRIR A CONEXÃO");
		}
		
		PreparedStatement pstmt = null;
		
		try {
			pstmt = conn.prepareStatement("insert into tb_funcionario(nome, matricula, cpf, salario) values(?, ?, ?, ?)");
			
			pstmt.setString(1, f.getNome());
			pstmt.setInt(2, f.getMatricula());
			pstmt.setString(3, f.getCpf());
			pstmt.setDouble(4, f.getSalario());
			
			int flag = pstmt.executeUpdate();

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
