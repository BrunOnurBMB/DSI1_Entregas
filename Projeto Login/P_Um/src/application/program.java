package application;

import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

import entities.Lista;
import entities.ListaEstudo;

public class program {
	
	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		DateTimeFormatter fmt = DateTimeFormatter.ofPattern("dd/MM/yyyy HH:mm");
		
		System.out.println("Vamos iniciar uma lista de estudos!!");
		System.out.println();
		
		System.out.println("Como deseja chamar essa lista?");
		String nome = sc.nextLine();
		System.out.println();
		
		System.out.println("Quantos elementos a lista vai ter?");
		int n = sc.nextInt();
		
		List<ListaEstudo> listasDeEstudo = new ArrayList<>();
		sc.nextLine();
		System.out.println();
		
		for(int i = 1; i <= n; i++) {
			System.out.println("Qual o nome da " + i + "º matéria?");
			String materia = sc.nextLine();
			System.out.println();
			
			System.out.println("De a descrição do estudo proposto: ");
			String descricao = sc.nextLine();
			System.out.println();
			
			System.out.println("Selecione a prioridade desta materia: ");
			System.out.println("1 = Alta | 2 = Média | 3 = Baixa");
			int priori = sc.nextInt();
			while (priori != 1 && priori != 2 && priori != 3) {
				System.out.println("Insira um valor válido: ");
				priori = sc.nextInt();
			}
			sc.nextLine();
			String prioridade = (priori == 1) ? "Alta" : (priori == 2) ? "Média" : "Baixa"; 
			System.out.println();
			
			System.out.println("Qual a data e hora final dos estudos? (dd/MM/yyyy HH:mm)");
			String data = sc.nextLine();
			LocalDateTime dataFinal = LocalDateTime.parse(data, fmt);
			
			ListaEstudo listaEstudo = new ListaEstudo(nome, descricao, prioridade, "Ativa", LocalDateTime.now(), dataFinal ,materia);
            listasDeEstudo.add(listaEstudo);
		}
		
		System.out.println();
		System.out.println("Exibindo as listas criadas:");
		System.out.println();
		
		for (ListaEstudo listaEstudo : listasDeEstudo) {
			System.out.println(listaEstudo.exibirItemsEstudo(true).toString());
			System.out.println();
			System.out.println("----------------------");
			System.out.println();
		}
		
		System.out.println("Exibindo lista filtrada por prioridade: ");
		System.out.println();
		
		List<ListaEstudo> listaAltaPrioridade = new ArrayList<>();
		for(ListaEstudo listasEstudo : listasDeEstudo) {
			if(listasEstudo.getPrioridade().equalsIgnoreCase("Alta")) {
				listaAltaPrioridade.add(listasEstudo);
			}
		}
		
		for (ListaEstudo listaFiltrada : listaAltaPrioridade) {
            System.out.println(listaFiltrada.toString());
            System.out.println();
            System.out.println("----------------------");
            System.out.println();
        }
		sc.close();
	}
}