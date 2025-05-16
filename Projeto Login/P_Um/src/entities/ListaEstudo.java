package entities;

import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;

public class ListaEstudo extends Lista {

	private String materia;

	public ListaEstudo(String nome,
					   String descricao,
					   String prioridade,
					   String estatus,
					   LocalDateTime dataInicio,
					   LocalDateTime dataFinal ,
					   String materia) {
		super(nome, descricao, prioridade, estatus, dataInicio, dataFinal);
		this.materia = materia;
	}
	
	public String getMateria() {
		return materia;
	}

	public void setMateria(String materia) {
		this.materia = materia;
	}
	
	public void adicionarItem(Lista item, Lista prioridade) {
		super.adicionarItem(item);
	}
		
	@Override
	public String toString() {
		StringBuilder sb = new StringBuilder();
		
		DateTimeFormatter fmt = DateTimeFormatter.ofPattern("dd/MM/yyyy HH:mm");
		LocalDateTime agora = getDataFinal();
		String horaFinalFormat = agora.format(fmt);
		
		sb.append("Materia: ").append(materia).append("\n")
		  .append("Prioridade: ").append(prioridade).append("\n")
		  .append("Descrição: ").append(descricao).append("\n")
		  .append("Data de conclusão: ").append(horaFinalFormat).append("\n");
		
		return sb.toString();
	}

	public String exibirItemsEstudo(boolean incluirMateria) {
		StringBuilder sb = new StringBuilder();
		
		DateTimeFormatter fmt = DateTimeFormatter.ofPattern("dd/MM/yyyy HH:mm");
		LocalDateTime agora = getDataInicio();
		String horaInicioFormat = agora.format(fmt);
		
		String periodoFinal = calculaDiferencaTempo(dataFinal);
		String horaFinalFormat = periodoFinal.formatted(fmt);
		
		sb.append("Nome da lista: ").append(nome).append("\n")
		  .append("Descrição: ").append(descricao).append("\n")		
		  .append("Prioridade: ").append(prioridade).append("\n")		
		  .append("Estatus: ").append(estatus).append("\n")		
		  .append("Data de início: ").append(horaInicioFormat).append("\n")		
		  .append("Data final: ").append(dataFinal).append("\n")		
		  .append("Tempo restante: ").append(horaFinalFormat).append("\n");		
		
		if(incluirMateria) {
			sb.append("Matéria: ").append(materia).append("\n");
		}
		
		return sb.toString();
	}
}