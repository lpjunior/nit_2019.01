package br.com.senac.pizzariaweb.controle;

import java.io.IOException;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import br.com.senac.pizzariaweb.modelo.Cliente;
import br.com.senac.pizzariaweb.persistencia.ClienteDAO;
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
	
//	private List<Cliente> clientes;
//	private SequenceID sequenceID;
	private ClienteDAO dao;
    public ServletCliente() {
        super();
//        CLIENTES = NEW ARRAYLIST<CLIENTE>();
//        SEQUENCEID = NEW SEQUENCEID();
        dao = new ClienteDAO();
    }

    // via método HTTP GET
    // HttpServletRequest - responsável por gerir todas as requisições enviadas para essa servlet
    // HttpServletResponse - responsável por gerir todas as respostas dessa servlet
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
	
    // via método HTTP POST
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
		
		// TUDO que vem da requisição, vem em formato String
		String nome = request.getParameter("txtNome"); // atributo name do input html
		String email = request.getParameter("txtEmail"); // atributo name do input html
		String cpf = request.getParameter("txtCPF").replace(".", "").replace("-", ""); // atributo name do input html
		String senha = request.getParameter("txtSenha"); // atributo name do input html
		
		Cliente c = new Cliente();
		
//		c.setId(sequenceID.nextID());
		c.setNome(nome);
		c.setEmailCliente(email);
		c.setCpf(cpf);
		c.setSenhaCliente(senha);
		
		// adiciona a lista de clientes
//		clientes.add(c);
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
//		IF(CLIENTES.REMOVE(INTEGER.PARSEINT(REQUEST.GETPARAMETER("ID")) - 1) != NULL) {
//			RESPONSE.GETWRITER().APPEND("CLIENTE EXCLUÍDO.");			
//		}	
	}
	
	protected void editar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao método editar via " + request.getMethod());
	}
	
	protected void atualizar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao método atualizar via " + request.getMethod());
	}
	
	protected void listar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
//		for (Cliente cli : clientes) { // foreach
//			
//			response.getWriter().append(
//					"Cliente:<br>")
//					.append("ID: " + cli.getId())
//					.append("<br>Nome: " + cli.getNome())
//					.append("<br>Email: " + cli.getEmailCliente())
//					.append("<br>CPF: " + cli.getCpf())
//					.append("<br>Senha: " + cli.getSenhaCliente() + "<br><br>");
//		}
	}
	
	protected void localizar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao método localizar via " + request.getMethod());
	}
}
