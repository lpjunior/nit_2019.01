package br.com.senac.pizzariaweb.util;

public class SequenceID {

	// atributo estatico
	private int id;
	
	// o m�todo incrementa o id e retorna o valor
	public int nextID() {
		return ++id;
	}
}
