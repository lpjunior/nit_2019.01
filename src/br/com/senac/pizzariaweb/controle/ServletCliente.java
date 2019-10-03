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

@WebServlet({ "/cliente/adicionar", // post
			  "/cliente/remover",   // get
			  "/cliente/editar",    // get
			  "/cliente/atualizar", // post
			  "/cliente/listar",    // get
			  "/cliente/localizar"  // get
			  })
public class ServletCliente extends HttpServlet {
	private static final long serialVersionUID = 1L;
	private List<Cliente> clientes;
	
    public ServletCliente() {
        super();
        clientes = new ArrayList<Cliente>();
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
			response.getWriter().append("Página não localizada!!! " + request.getMethod());
		}
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		if(request.getServletPath().equals("/cliente/adicionar")) { // adicionar
			adicionar(request, response);
		} else if(request.getServletPath().equals("/cliente/atualizar")) { // remover
			atualizar(request, response);
		} else {
			response.getWriter().append("Página não localizada!!! " + request.getMethod());
		}
	}

	// ctrl + shift + o para organizar seus imports
	protected void adicionar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
				
		/* No PHP.. quando queriamos resgatar um valor vindo do formulario
		 * nós usavamos os comandos $_POST ou $_GET ou filter(INPUT_POST)..
		 * Agora no Java usaremos o método getParameter(), esse método é utilizado para ambos casos,
		 * seja para dados enviados via post ou via get
		 */
		String nome = request.getParameter("nome"); // atributo name do input html
		String email = request.getParameter("email"); // atributo name do input html
		String cpf = request.getParameter("cpf"); // atributo name do input html
		String senha = request.getParameter("senha"); // atributo name do input html
		
		Cliente c = new Cliente();
		
		c.setId(SequenceID.nextID());
		c.setNome(nome);
		c.setEmailCliente(email);
		c.setCpf(cpf);
		c.setSenhaCliente(senha);
		
		clientes.add(c);
		
		for (Cliente cli : clientes) {
			response.getWriter().append("Cliente cadastrado com sucesso!\n"
					+ "Seus dados cadastrais foram:\n"
					+ "ID: " + cli.getId()
					+ "\nNome: " + cli.getNome()
					+ "\nEmail: " + cli.getEmailCliente()
					+ "\nCPF: " + cli.getCpf()
					+ "\nSenha: " + cli.getSenhaCliente() + "\n\n");
		}
	}
	
	protected void remover(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao método remover via " + request.getMethod());
	}
	
	protected void editar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao método editar via " + request.getMethod());
	}
	
	protected void atualizar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao método atualizar via " + request.getMethod());
	}
	
	protected void listar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao método listar via " + request.getMethod());
	}
	
	protected void localizar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao método localizar via " + request.getMethod());
	}
}
