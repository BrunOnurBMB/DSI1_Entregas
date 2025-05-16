package exercicio01;

public class TestaFuncionario {

	public static void main(String[] args) {
		
		Funcionario func1 = new Funcionario();
		Funcionario func2 = new Funcionario();
		
		func1.nome = "Juranir Junior";
		func1.salario = 12500.00;
		
		func2.nome = "Amarilda Silva";
		func2.salario = 28900.00;
		
		System.out.println("Funcionários: ");
		System.out.println();
		System.out.println("Nome: " + func1.nome + " || Salario: " + String.format("%.2f", func1.salario));
		System.out.println("Nome: " + func2.nome + " || Salario: " + String.format("%.2f", func2.salario));
		
		System.out.println();
		System.out.println("--------------------------------------------------------------");
		System.out.println();
		
		func1.aumentaSalario(0.10);
		func1.consultaDadosFuncionario(func1.nome, func1.salario);
		
		func2.aumentaSalario(0.10);
		func2.consultaDadosFuncionario(func2.nome, func2.salario);
	}
}