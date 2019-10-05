package br.com.senac.pizzariaweb.controle;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import br.com.senac.pizzariaweb.modelo.Cliente;
import br.com.senac.pizzariaweb.util.SequenceID;

@WebServlet({ "/cliente/adicionar",
			  "/cliente/remover",
			  "/cliente/editar",
			  "/cliente/atualizar",
			  "/cliente/listar",
			  "/cliente/localizar"
			  })
public class ServletCliente extends HttpServlet {
	private static final long serialVersionUID = 1L;
	private List<Cliente> clientes;
	private SequenceID sequenceID;
	
    public ServletCliente() {
        super();
        clientes = new ArrayList<Cliente>();
        sequenceID = new SequenceID();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		if(request.getServletPath().equals("/cliente/remover")) { // remover
			remover(request, response);
		} else if(request.getServletPath().equals("/cliente/editar")) { // editar
			editar(request, response);
		} else if(request.getServletPath().equals("/cliente/listar")) { // listar
			listar(request, response);
		} else if(request.getServletPath().equals("/cliente/localizar")) { // localizar
			localizar(request, response);
		} else {
			response.getWriter().append("P�gina n�o localizada!!! " + request.getMethod());
		}
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		if(request.getServletPath().equals("/cliente/adicionar")) { // adicionar
			adicionar(request, response);
		} else if(request.getServletPath().equals("/cliente/atualizar")) { // remover
			atualizar(request, response);
		} else {
			response.getWriter().append("P�gina n�o localizada!!! " + request.getMethod());
		}
	}

	// ctrl + shift + o para organizar seus imports
	protected void adicionar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
				
		/* No PHP.. quando queriamos resgatar um valor vindo do formulario
		 * n�s usavamos os comandos $_POST ou $_GET ou filter(INPUT_POST)..
		 * Agora no Java usaremos o m�todo getParameter(), esse m�todo � utilizado para ambos casos,
		 * seja para dados enviados via post ou via get
		 */
		String nome = request.getParameter("nome"); // atributo name do input html
		String email = request.getParameter("email"); // atributo name do input html
		String cpf = request.getParameter("cpf"); // atributo name do input html
		String senha = request.getParameter("senha"); // atributo name do input html
		
		Cliente c = new Cliente();
		
		c.setId(sequenceID.nextID());
		c.setNome(nome);
		c.setEmailCliente(email);
		c.setCpf(cpf);
		c.setSenhaCliente(senha);
		
		clientes.add(c);
		
		response.getWriter().append("Cliente cadastrado com sucesso!<br>"
			+ "Seus dados cadastrais foram:<br>"
			+ "ID: " + c.getId()
			+ "<br>Nome: " + c.getNome()
			+ "<br>Email: " + c.getEmailCliente()
			+ "<br>CPF: " + c.getCpf()
			+ "<br>Senha: " + c.getSenhaCliente() + "<br><br>");
	}
	
	protected void remover(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		if(clientes.remove(Integer.parseInt(request.getParameter("id")) - 1) != null) {
			response.getWriter().append("Cliente exclu�do.");			
		}	
	}
	
	protected void editar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao m�todo editar via " + request.getMethod());
	}
	
	protected void atualizar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao m�todo atualizar via " + request.getMethod());
	}
	
	protected void listar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		for (Cliente cli : clientes) {
			
			response.getWriter().append(
					"Cliente:<br>"
					+ "ID: " + cli.getId()
					+ "<br>Nome: " + cli.getNome()
					+ "<br>Email: " + cli.getEmailCliente()
					+ "<br>CPF: " + cli.getCpf()
					+ "<br>Senha: " + cli.getSenhaCliente() + "<br><br>");
		}
	}
	
	protected void localizar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao m�todo localizar via " + request.getMethod());
	}
}
