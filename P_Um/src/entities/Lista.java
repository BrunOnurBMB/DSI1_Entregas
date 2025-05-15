package entities;

import java.time.Duration;
import java.time.LocalDateTime;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.List;

public class Lista {
	protected String nome;
	protected String descricao;
	protected String prioridade;
	protected String estatus;
	protected LocalDateTime dataInicio;
	protected LocalDateTime dataFinal;
	
	protected ArrayList<Lista> items = new ArrayList<>();
		
	public Lista () {
	}
	
	 public Lista(String nome,
			 	  String descricao,
			 	  String prioridade,
			 	  String estatus,
			 	  LocalDateTime dataInicio,
			 	  LocalDateTime dataFinal) {
	        this.nome = nome;
	        this.descricao = descricao;
	        this.prioridade = prioridade;
	        this.estatus = estatus;
	        this.dataInicio = dataInicio;
	        this.dataFinal = dataFinal;
	    }

	public String getNome() {
		return nome;
	}
	
	public void setNome(String nome) {
		this.nome = nome;
	}
		
	public String getDescricao() {
		return descricao;
	}
	
	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}
	
	public String getPrioridade() {
		return prioridade;
	}
	
	public void setPrioridade(String prioridade) {
		this.prioridade = prioridade;
	}
		
	public String getEstatus() {
		return estatus;
	}
	
	public void setEstatus(String estatus) {
		this.estatus = estatus;
	}
		
	public LocalDateTime getDataInicio() {
		return dataInicio;
	}

	public void setDataInicio(LocalDateTime dataInicio) {
		this.dataInicio = dataInicio;
	}

	public LocalDateTime getDataFinal() {
		return dataFinal;
	}

	public void setDataFinal(LocalDateTime dataFinal) {
		this.dataFinal = dataFinal;
	}

	public ArrayList<Lista> getItems() {
	    return new ArrayList<>(items);
	}

	public void setItems(ArrayList<Lista> novoItems) {
	    this.items.clear();
	    this.items.addAll(novoItems); 
	}
	
	public void adicionarItem(Lista item) {
		items.add(item);
	}
	
	public void removerItem(Lista item) {
		items.remove(item);
	}
	
	public void atualizarStatus(String novoEstatus) {
		this.estatus = novoEstatus;
	}
	
	public String calculaDiferencaTempo(LocalDateTime dataFinal) {
		LocalDateTime dataInicio = LocalDateTime.now();
		
		if (dataFinal.isBefore(dataInicio)) {
			return "A data futura já passou!! :c";
		}
		
		Duration duracao = Duration.between(dataInicio, dataFinal);
		long dias = duracao.toDays();
		long horas = duracao.toHours() % 24;
		long minutos = duracao.toMinutes() % 60;
		
		return "Faltam " + dias + " dias, " + horas + " horas e " + minutos + "minutos";
	}
	
	public List<Lista> buscaPorPrioridade(String prioridade){
		List<Lista> filtrados = new ArrayList<>();
		for(Lista item : items) {
			if(item.getPrioridade().equalsIgnoreCase(prioridade)) {
				filtrados.add(item);
			}
		}
		
		return filtrados;
	}
	
	public String exibirItems() {
		StringBuilder sb = new StringBuilder();
		
		DateTimeFormatter fmt = DateTimeFormatter.ofPattern("dd/MM/yyyy HH:mm");
		LocalDateTime agora = getDataInicio();
		String horaInicioFormat = agora.format(fmt);
		
		sb.append("Nome da lista: ").append(nome).append("\n")
		  .append("Descrição: ").append(descricao).append("\n")		
		  .append("Prioridade: ").append(prioridade).append("\n")		
		  .append("Estatus: ").append(estatus).append("\n")		
		  .append("Data de início: ").append(horaInicioFormat).append("\n")		
		  .append("Data final: ").append(dataFinal).append("\n")		
		  .append("Tempo restante: ").append(calculaDiferencaTempo(dataFinal)).append("\n");		
		
		return sb.toString();
	}
}