package academy.devdojo.maratonajava.javacore.Npolimorfismo.test;

import academy.devdojo.maratonajava.javacore.Npolimorfismo.domain.Computador;
import academy.devdojo.maratonajava.javacore.Npolimorfismo.domain.Televisao;
import academy.devdojo.maratonajava.javacore.Npolimorfismo.domain.Tomate;
import academy.devdojo.maratonajava.javacore.Npolimorfismo.servico.CalculadoraImposto;

public class Test01 {
    public static void main(String[] args) {
        Computador computador = new Computador("NUC10i7", 11000);
        Tomate tomate = new Tomate("Tomate Siciliano", 10);
        Televisao tv = new Televisao("Samsung 50p ", 5000);
        CalculadoraImposto.calcularImposto(computador);
        System.out.println("-------------------------------------");
        CalculadoraImposto.calcularImposto(tomate);
        System.out.println("-------------------------------------");
        CalculadoraImposto.calcularImposto(tv);
    }
}
