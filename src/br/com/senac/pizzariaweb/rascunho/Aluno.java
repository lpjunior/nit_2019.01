package br.com.senac.pizzariaweb.rascunho;

public class Aluno {

	private String nome;
	private String nota01;
	private String nota02;
	
	public Aluno() {
	}
	
	public Aluno(String nome, double nota01, double nota02) {
		this.nome = nome;
		this.nota01 = String.valueOf(nota01);
		this.nota02 = String.valueOf(nota02);
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
	
	public String getNome() {
		return nome;
	}
	
	public void setNota01(double nota01) {
		this.nota01 = String.valueOf(nota01);
	}
	
	public double getNota01() {
		return Double.valueOf(nota01);
	}
	
	public void setNota02(double nota02) {
		this.nota02 = String.valueOf(nota02);
	}
	
	public double getNota02() {
		return Double.valueOf(nota02);
	}
	
	public Double getMedia() {
		return (Double.valueOf(nota01) + Double.valueOf(nota02)) / 2;
	}
}
