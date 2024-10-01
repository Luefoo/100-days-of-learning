package academy.devdojo.maratonajava.javacore.Fmodificadorestatico.domain;

public class Anime {
    private String nome;
    private static int[] episodios;
    static {
        System.out.println("Dentro do bloco de init");
        episodios = new int[100];
        for (int i = 0; i < episodios.length ; i++) {
            episodios[i] = i+1;

        }
    }
    static {
        System.out.println("Static 1");
    }

    static {
        System.out.println("Static 1");
    }

    static {
        System.out.println("Static 1");
    }

    {
        System.out.println("Não estático");
    }
    public Anime(String nome) {
        this.nome = nome;

    }

    public Anime() {

        System.out.println(episodios);
        for (int episodio: Anime.episodios){
            System.out.print(episodio + " ");
        }

    }

    public String getNome() {
        return nome;
    }

    public int[] getEpisodios() {
        return episodios;
    }
}

