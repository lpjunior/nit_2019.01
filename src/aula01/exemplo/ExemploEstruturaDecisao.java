package aula01.exemplo;

public class ExemploEstruturaDecisao {
	public static void main(String[] args) {
		/*
		 * Temos como estrutura de decis�o:
		 * - Estrutura simples
		 * - Estrutura composta
		 * - Estrutura encadeada
		 * - Estrutura compacta
		 * - Estrutura tern�ria
		 * - Estrutura escolha
		 * */
		
		int idade = 17;
		
		// Estrutura simples
		if(idade > 18) {
			System.out.println("Pode dirigir");
		}
		
		// Estrutura composta
		if(idade > 18) {
			System.out.println("Pode dirigir");
		} else {
			System.out.println("Vai ter que ir a p�!!!!");
		}
		
		String transporte = "biCicLeta";
		// Estrutura encadeada
		if(idade > 18) {
			System.out.println("Pode dirigir");
		} else if(transporte.equalsIgnoreCase("BICICLETA")) {
			System.out.println("Vai ter que ir pedalando!");
		} else if(transporte == "onibus") {
			System.out.println("Vai ter que ir de bus�o!");
		} else {
			System.out.println("Vai ter que ir a p�!!!!");			
		}
	}
}
