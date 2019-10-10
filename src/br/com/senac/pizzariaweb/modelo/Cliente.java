package br.com.senac.pizzariaweb.modelo;

// o "start" da herança é dado pela palavra "extends"
public class Cliente extends Pessoa { // Classe Cliente irá especializar a classe Pessoa
	
	// atributos da classe cliente
	private String emailCliente;
	private String senhaCliente;
	
	// construtor sem argumentos
	public Cliente() {
		super(); // chama o construtor sem argumentos da classe pai por padrão 
	}
	
	// construtor com argumentos
	public Cliente(Integer idCliente, String nomeCliente, String cpfCliente, String emailCliente, String senhaCliente) {
		// super - referencia a superclasse (classe pai)
		super(idCliente, nomeCliente, cpfCliente); // é a chamada do construtor da classe pai
		// dados especificos de cliente
		this.emailCliente = emailCliente;
		this.senhaCliente = senhaCliente;
		
		// o this serve para referenciar o membro da classe, ou seja, o atributo originado da classe.
	}
	
	// Métodos de encapsulamento
	
	// método get - retorna o valor do atributo
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
