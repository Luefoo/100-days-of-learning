package academy.devdojo.maratonajava.javacore.Bintroducaometodos.test;

import academy.devdojo.maratonajava.javacore.Bintroducaometodos.dominio.Estudante;
import academy.devdojo.maratonajava.javacore.Bintroducaometodos.dominio.ImpressoraEstudante;

public class EstudanteTest02 {
    public static void main(String[] args) {
        Estudante estudante01 = new Estudante();
        Estudante estudante02 = new Estudante();


        System.out.println("-------------------");


        estudante01.nome = "Saitama";
        estudante01.idade = 25;
        estudante01.sexo = 'M';

        estudante02.nome = "Bakugou";
        estudante02.idade = 171;
        estudante02.sexo = 'M';
    }
}
