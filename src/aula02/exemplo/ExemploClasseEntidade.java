package aula02.exemplo;

public class ExemploClasseEntidade {

	// atributos a classe
	String nome;
	int idade;
	Double peso;
	Integer quantidade;
	
	/* Uma classe pode ter seus atributos(caracteristicas),
	 * que podem ser definidas pelo tipo e sua visibilidade.
	 * Quando n�o definida a visibilidade, por padr�o a visibilidade
	 * � definida como PACKAGE, ou seja, todas as classes que est�o no 
	 * mesmo pacote podem acessar aquele atributo.
	 */
	
	/*
	 * Construtor: "m�todo" respons�vel por criar o objeto da classe
	 * Temos construtores com argumentos e sem argumentos, 
	 * tamb�m conhecidos(em dev) como: construtos cheio e vazios.
	 */
	public ExemploClasseEntidade() {
		
	}
	
	/* m�todos: a��es que uma classe pode ter */
	public String falar(String msg) {
		return msg;
	}
	
	public static void main(String[] args) {
		// cria��o da referencia da classe ExemploClasseEntidade
		ExemploClasseEntidade ece;
		// instancia��o do objeto da classe
		ece = new ExemploClasseEntidade();
		
		System.out.println(ece.falar("Ol�"));
	}
}
