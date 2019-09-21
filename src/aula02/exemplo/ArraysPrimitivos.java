// package � a pasta do projeto aonde est� alocado o(s) arquivo(s)
package aula02.exemplo;

/** @public: define a visibilidade (acesso) a classe, como os outros componentes do projeto
 * iram poder acessar ela
 * 
 * @class: palavra chave para definir o tipo do elemento que est� sendo criado
 * Temos as palavras: class, interface, Enum
 */
public class ArraysPrimitivos {

	/**
	 * @static: define que o m�todo � estatico, ou seja, pertence a classe e n�o a instancia.
	 * @void: define o tipo de retorno que o m�todo ter�, void significa que n�o retorna nada.
	 */
	public static void main(String[] args) {
		
		// array de inteiros */
		
		// cria��o do array (vetor)
		int[] num = new int[5];
		
		// manipular (inserir os dados)
		num[0] = 32;
		num[1] = 20;
		num[2] = 2019;
		num[3] = 9;
		num[4] = 4;
		
		// imprimir o array
		/* length: retorna o tamanho total do array
		 * */
		for(int i = 0; i < num.length; i++) {
			System.out.println(num[i]);
		}
		
		// cria��o do array (matriz)
		String[][] dadosAlunos = new String[3][3];
		//          L  C
		dadosAlunos[0][0] = "1";
		dadosAlunos[0][1] = "ALU123";
		dadosAlunos[0][2] = "Luis";
		
		dadosAlunos[1][0] = "2";
		dadosAlunos[1][1] = "ALU231";
		dadosAlunos[1][2] = "Paulo";
		
		dadosAlunos[2][0] = "3";
		dadosAlunos[2][1] = "ALU321";
		dadosAlunos[2][2] = "Junior";
		
		
		System.out.println("ID    Matricula   Nome");
		for(int l = 0; l < dadosAlunos.length; l++) {
			for(int c = 0; c < dadosAlunos.length; c++) {
				System.out.print(dadosAlunos[l][c] + "      ");
			}
			
			System.out.print("\n\n");
		}
	}
}
