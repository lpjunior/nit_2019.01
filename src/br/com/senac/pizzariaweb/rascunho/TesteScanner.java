package br.com.senac.pizzariaweb.rascunho;

import java.util.Scanner;

public class TesteScanner {

	public static void main(String[] args) {
		try(Scanner scan = new Scanner(System.in)) { // o try nesse caso finaliza a instancia de Scanner
			
			System.out.print("Valor: ");
			double x = scan.nextDouble();
			
			System.out.println(x);
		}
	}
}

