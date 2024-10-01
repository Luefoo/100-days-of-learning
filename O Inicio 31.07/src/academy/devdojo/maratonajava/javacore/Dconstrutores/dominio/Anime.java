package academy.devdojo.maratonajava.javacore.Dconstrutores.dominio;

public class Anime {
    private String tipo;
    private int episodios;
    private String nome;
    private String genero;
    private String estudio;

    public Anime(String nome, int episodios, String tipo, String genero, String estudio){
        this.nome = nome;
        this.episodios = episodios;
        this.tipo = tipo;
        this.genero = genero;
        this.estudio = estudio;
    }
  public Anime(){
      System.out.println("Dentro do construtor sem argumentos");
  }

    public void imprime(){
        System.out.println(this.tipo);
        System.out.println(this.episodios);

    }


    public String getTipo() {
        return tipo;
    }

    public void setTipo(String tipo) {
        this.tipo = tipo;
    }

    public int getEpisodios() {
        return episodios;
    }

    public void setEpisodios(int episodios) {
        this.episodios = episodios;
    }

}
