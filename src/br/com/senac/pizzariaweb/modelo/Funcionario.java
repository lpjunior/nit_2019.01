package br.com.senac.pizzariaweb.modelo;

public class Funcionario extends Pessoa {


	private double salario;
	private int matricula;
	
	// ctrl + espaço
	public Funcionario() {
	}
	
	public Funcionario(int idFun, String nmFun, String cpfFun, double salario, int matricula) {
		super(idFun, nmFun, cpfFun);
		this.salario = salario;
		this.matricula = matricula;
	}

	// (alt + shift + s) + r
	public double getSalario() {
		return salario;
	}

	public void setSalario(double salario) {
		this.salario = salario;
	}

	public int getMatricula() {
		return matricula;
	}

	public void setMatricula(int matricula) {
		this.matricula = matricula;
	}
}
