package academy.devdojo.maratonajava.javacore.Csobrecargametodos.test;

import academy.devdojo.maratonajava.javacore.Csobrecargametodos.dominio.Anime;

public class AnimeTest01 {
    public static void main(String[] args) {
        Anime anime = new Anime();
anime.init("Naruto", 20, "TV", "Shounen");
        anime.setTipo("TV");
        anime.setEpisodios(20);
        anime.setNome("Naruto");
        anime.setGenero("Shounen");
        anime.imprime();
    }
}
