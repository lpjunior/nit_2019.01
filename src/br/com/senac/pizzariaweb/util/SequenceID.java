package br.com.senac.pizzariaweb.util;

public class SequenceID {

	// atributo estatico
	private static int id;
	
	// o método incrementa o id e retorna o valor
	public static int nextID() {
		return ++id;
	}
}
