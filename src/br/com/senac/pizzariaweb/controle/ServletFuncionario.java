package br.com.senac.pizzariaweb.controle;

import java.io.IOException;
import java.sql.SQLException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import br.com.senac.pizzariaweb.modelo.Funcionario;
import br.com.senac.pizzariaweb.persistencia.FuncionarioDAO;

@WebServlet({ "/funcionario/adicionar", 
			  "/funcionario/editar", 
			  "/funcionario/listar", 
			  "/funcionario/excluir",
			  "/funcionario/atualizar", 
			  "/funcionario/localizar" })
public class ServletFuncionario extends HttpServlet {
	private static final long serialVersionUID = 1L;
	
	private FuncionarioDAO dao;
	
	public ServletFuncionario() {
		super();

		dao = new FuncionarioDAO();
	}
	
	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		
		if(request.getServletPath().equals("/funcionario/adicionar")) {
			adicionar(request, response);
		}
	}

	protected void adicionar(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		
		String nome = request.getParameter("txtNome");
		int matricula = Integer.valueOf(request.getParameter("txtMatricula"));
		String cpf = request.getParameter("txtCPF");
		double salario = Double.valueOf(request.getParameter("txtSalario").replace(".", "").replace(",", ""));
		
		Funcionario f = new Funcionario(nome, cpf, salario, matricula);
		
		try {
			// chama o método a para gravar no banco
			dao.gravar(f);
			// imprime a mensagem de dados gravados
			response.getWriter()
					.append("Funcionario cadastrado com sucesso!\n")
					.append("Seus dados cadastrais foram:\n")
					.append("ID: " + f.getId())
					.append("\nNome: " + f.getNome())
					.append("\nMatricula: " + f.getMatricula())
					.append("\nCPF: " + f.getCpf())
					.append("\nSalario: " + f.getSalario());
			
		} catch (SQLException e) {
			e.printStackTrace();
			response.getWriter().append("Falha ao gravar no banco\n");
		}
	}

	protected void listar(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
	}
	
	protected void excluir(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
	}
	
	protected void editar(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
	}
	
	protected void localizar(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
	}
}
