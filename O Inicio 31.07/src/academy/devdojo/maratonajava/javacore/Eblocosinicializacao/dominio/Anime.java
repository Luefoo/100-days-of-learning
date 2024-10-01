package academy.devdojo.maratonajava.javacore.Eblocosinicializacao.dominio;

public class Anime {
    private String nome;
    private int[] episodios;
    {
        System.out.println("Dentro do bloco de init");
        episodios = new int[100];
        for (int i = 0; i < episodios.length ; i++) {
            episodios[i] = i+1;

        }
    }
    public Anime(String nome) {
        this.nome = nome;

    }

    public Anime() {

        System.out.println(episodios);
        for (int episodio: this.episodios){
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

