package aula01.exemplo;

// public class Calculadora -- assinatura da classe
public class ExemploVariavel {

	// public static void main(String[] args) -- assinatura do método
	public static void main(String[] args) {
		/* SQL.. vocês tinham a forma de definir um tipo
		 * num01 int, agora no Java o tipo vem primeiro
		 */
		int num01 = 10; // primitivo para trabalhar valores inteiros
		
		// é equivalente ao echo do PHP ou o console.log do JavaScript
		System.out.println(num01);
		
		double peso = 190.5; // primitivo para trabalhar valores reais
		System.out.println("O peso da mala é: " + peso);
	}
}
