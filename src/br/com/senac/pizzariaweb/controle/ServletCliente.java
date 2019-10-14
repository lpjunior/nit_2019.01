package br.com.senac.pizzariaweb.controle;

import java.io.IOException;
import java.sql.SQLException;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import br.com.senac.pizzariaweb.modelo.Cliente;
import br.com.senac.pizzariaweb.persistencia.ClienteDAO;

@WebServlet({ "/cliente/adicionar",
			  "/cliente/remover",
			  "/cliente/editar",
			  "/cliente/atualizar",
			  "/cliente/listar",
			  "/cliente/localizar"
			  })
public class ServletCliente extends HttpServlet {
	private static final long serialVersionUID = 1L;
	
	private ClienteDAO dao;
    public ServletCliente() {
        super();
        dao = new ClienteDAO();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		if(request.getServletPath().equals("/cliente/remover")) {
			remover(request, response);
		} else if(request.getServletPath().equals("/cliente/editar")) {
			editar(request, response);
		} else if(request.getServletPath().equals("/cliente/listar")) {
			listar(request, response);
		} else if(request.getServletPath().equals("/cliente/localizar")) {
			localizar(request, response);
		} else {
			response.getWriter().append("P�gina n�o localizada!!! " + request.getMethod());
		}
	}
	
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		if(request.getServletPath().equals("/cliente/adicionar")) {
			adicionar(request, response);
		} else if(request.getServletPath().equals("/cliente/atualizar")) {
			atualizar(request, response);
		} else {
			response.getWriter().append("P�gina n�o localizada!!! " + request.getMethod());
		}
	}

	protected void adicionar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
				
		String nome = request.getParameter("txtNome");
		String email = request.getParameter("txtEmail");
		String cpf = request.getParameter("txtCPF").replace(".", "").replace("-", "");
		String senha = request.getParameter("txtSenha");
		
		Cliente c = new Cliente();

		c.setNome(nome);
		c.setEmailCliente(email);
		c.setCpf(cpf);
		c.setSenhaCliente(senha);
		
		try {
			c.setId(dao.gravar(c));
			
			response.getWriter()
					.append("Cliente cadastrado com sucesso!\n")
					.append("Seus dados cadastrais foram:\n")
					.append("ID: " + c.getId())
					.append("\nNome: " + c.getNome())
					.append("\nEmail: " + c.getEmailCliente())
					.append("\nCPF: " + c.getCpf())
					.append("\nSenha: " + c.getSenhaCliente());
			
		} catch (SQLException e) {
			e.printStackTrace();
			response.getWriter().append("Falha ao gravar no banco\n");
		}
	}
	
	protected void remover(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
	
	}
	
	protected void editar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao m�todo editar via " + request.getMethod());
	}
	
	protected void atualizar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao m�todo atualizar via " + request.getMethod());
	}
	
	protected void listar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// fazer a chamada do m�todo listar() dentro do foreach
		try {
			// Adicionando um novo atributo a requisi��o
			request.setAttribute("listaClientes", dao.listar()); // os argumentos do m�todos s�o (chave, valor)
			
			// dispacha a requisi��o para a p�gina lista-clientes.jsp encaminhando todas requisi��es e respostas 
			request.getRequestDispatcher("/lista-clientes.jsp").forward(request, response);
		} catch (SQLException e) {
			e.printStackTrace();
		}
	}
	
	protected void localizar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao m�todo localizar via " + request.getMethod());
	}
}
