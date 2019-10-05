package br.com.senac.pizzariaweb.controle;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import br.com.senac.pizzariaweb.modelo.Funcionario;
import br.com.senac.pizzariaweb.util.SequenceID;

@WebServlet({ "/funcionario/adicionar", "/funcionario/editar", "/funcionario/listar", "/funcionario/excluir",
		"/funcionario/atualizar", "/funcionario/localizar" })
public class ServletFuncionario extends HttpServlet {
	private static final long serialVersionUID = 1L;
	private List<Funcionario> funcionarios;
	private SequenceID sequenceID;
	
	public ServletFuncionario() {
		super();
		funcionarios = new ArrayList<Funcionario>();
		sequenceID = new SequenceID();
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
		
		String nome = request.getParameter("nome");
		int matricula = Integer.valueOf(request.getParameter("matricula"));
		String cpf = request.getParameter("cpf");
		double salario = Double.valueOf(request.getParameter("salario").replace(".", "").replace(",", ""));
		
		Funcionario f = new Funcionario(sequenceID.nextID(), nome, cpf, salario, matricula);
		
		funcionarios.add(f);
		
		for (Funcionario fun : funcionarios) {
			response.getWriter().append("Funcionario cadastrado com sucesso!<br>"
				+ "Seus dados cadastrais foram:<br>"
				+ "ID: " + fun.getId()
				+ "<br>Nome: " + fun.getNome()
				+ "<br>Matricula: " + fun.getMatricula()
				+ "<br>CPF: " + fun.getCpf()
				+ "<br>Salario: " + fun.getSalario() + "<br><br>");
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
