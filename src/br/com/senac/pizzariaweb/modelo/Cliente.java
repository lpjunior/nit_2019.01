package br.com.senac.pizzariaweb.modelo;

public class Cliente {
	
	// atributos da classe cliente
	private Integer idCliente;
	private String nomeCliente;
	private String cpfCliente;
	private String emailCliente;
	private String senhaCliente;
	
	// construtor sem argumentos
	public Cliente() {
		
	}
	
	// construtor com argumentos
	public Cliente(Integer idCliente, String nomeCliente, String cpfCliente, String emailCliente, String senhaCliente) {
		// passagem de valores vindas do construtor para os atributos da classe
		this.idCliente = idCliente;
		this.nomeCliente = nomeCliente;
		this.cpfCliente = cpfCliente;
		this.emailCliente = emailCliente;
		this.senhaCliente = senhaCliente;
		
		// o this serve para referenciar o membro da classe, ou seja, o atributo originado da classe.
	}
	
	// Métodos de encapsulamento
	
	// método get - retorna o valor do atributo
	public String getNomeCliente() {
		return nomeCliente;
	}
	
	public void setNomeCliente(String nome) {
		nomeCliente = nome;
	}
}
