package br.com.senac.pizzariaweb.rascunho;

public class TesteEstatico {

	public static void main(String[] args) {
		A a1 = new A();
		A a2 = new A();
		
		a1.nome = "Pedro";
		System.out.println(a1.nome);
		a2.nome = "Bruno";
		System.out.println(a2.nome);

		System.out.println("\n\n----------------------------------------------\n");
		System.out.println(a1.nome);
		System.out.println(a2.nome);
	}
}

class A {
	public static String nome;
}
