package academy.devdojo.maratonajava.javacore.Npolimorfismo.test;

import academy.devdojo.maratonajava.javacore.Npolimorfismo.repositorio.Repositorio;
import academy.devdojo.maratonajava.javacore.Npolimorfismo.servico.RepositorioBancodeDados;

import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;

public class RepositorioTest01 {
    public static void main(String[] args) {
        Repositorio repositorio = new RepositorioBancodeDados();
        repositorio.salvar();

        List <String> list = new LinkedList<>();
        list.add("Goku");
        list.add("Musashi");
        list.add("Yasuo");
        list.add("Kurirobas");
        System.out.println(list);
    }
}
