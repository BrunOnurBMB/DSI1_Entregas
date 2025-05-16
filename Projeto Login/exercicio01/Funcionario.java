package exercicio01;

public class Funcionario {
	
	String nome;
	Double salario;
	
	void aumentaSalario (double valor){
		this.salario += (this.salario * valor);
	}
	
	void consultaDadosFuncionario(String nome, Double salario) {
		System.out.println("Nome: " + this.nome + " || Salario: " + this.salario);
	}
}