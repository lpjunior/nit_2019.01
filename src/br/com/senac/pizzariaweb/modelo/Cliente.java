package br.com.senac.pizzariaweb.modelo;

// o "start" da heran�a � dado pela palavra "extends"
public class Cliente extends Pessoa { // Classe Cliente ir� especializar a classe Pessoa
	
	// atributos da classe cliente
	private String emailCliente;
	private String senhaCliente;
	
	// construtor sem argumentos
	public Cliente() {
		super(); // chama o construtor sem argumentos da classe pai por padr�o 
	}
	
	// construtor com argumentos
	public Cliente(Integer idCliente, String nomeCliente, String cpfCliente, String emailCliente, String senhaCliente) {
		// super - referencia a superclasse (classe pai)
		super(idCliente, nomeCliente, cpfCliente); // � a chamada do construtor da classe pai
		// dados especificos de cliente
		this.emailCliente = emailCliente;
		this.senhaCliente = senhaCliente;
		
		// o this serve para referenciar o membro da classe, ou seja, o atributo originado da classe.
	}
	
	// M�todos de encapsulamento
	
	// m�todo get - retorna o valor do atributo
	public String getEmailCliente() {
		return emailCliente;
	}

	public void setEmailCliente(String emailCliente) {
		this.emailCliente = emailCliente;
	}

	public String getSenhaCliente() {
		return senhaCliente;
	}

	public void setSenhaCliente(String senhaCliente) {
		this.senhaCliente = senhaCliente;
	}
}
