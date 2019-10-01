package br.com.senac.pizzariaweb.controle;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet({ "/cliente/adicionar", // post
			  "/cliente/remover",   // get
			  "/cliente/editar",    // get
			  "/cliente/atualizar", // post
			  "/cliente/listar",    // get
			  "/cliente/localizar"  // get
			  })
public class ServletCliente extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    public ServletCliente() {
        super();
    }

	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		if(request.getServletPath().equals("/cliente/adicionar")) { // adicionar
			adicionar(request, response);
		} else if(request.getServletPath().equals("/cliente/remover")) { // remover
			remover(request, response);
		} else if(request.getServletPath().equals("/cliente/editar")) { // editar
			editar(request, response);
		} else if(request.getServletPath().equals("/cliente/atualizar")) { // atualizar
			atualizar(request, response);
		} else if(request.getServletPath().equals("/cliente/listar")) { // listar
			listar(request, response);
		} else if(request.getServletPath().equals("/cliente/localizar")) { // localizar
			localizar(request, response);
		}
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		doGet(request, response);
	}

	protected void adicionar(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		response.getWriter().append("chamada ao método adicionar via " + request.getMethod());
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
