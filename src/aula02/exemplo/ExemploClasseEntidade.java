package aula02.exemplo;

public class ExemploClasseEntidade {

	// atributos a classe
	String nome;
	int idade;
	Double peso;
	Integer quantidade;
	
	/* Uma classe pode ter seus atributos(caracteristicas),
	 * que podem ser definidas pelo tipo e sua visibilidade.
	 * Quando não definida a visibilidade, por padrão a visibilidade
	 * é definida como PACKAGE, ou seja, todas as classes que estão no 
	 * mesmo pacote podem acessar aquele atributo.
	 */
	
	/*
	 * Construtor: "método" responsável por criar o objeto da classe
	 * Temos construtores com argumentos e sem argumentos, 
	 * também conhecidos(em dev) como: construtos cheio e vazios.
	 */
	public ExemploClasseEntidade() {
		
	}
	
	/* métodos: ações que uma classe pode ter */
	public String falar(String msg) {
		return msg;
	}
	
	public static void main(String[] args) {
		// criação da referencia da classe ExemploClasseEntidade
		ExemploClasseEntidade ece;
		// instanciação do objeto da classe
		ece = new ExemploClasseEntidade();
		
		System.out.println(ece.falar("Olá"));
	}
}
