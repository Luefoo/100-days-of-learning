package academy.devdojo.maratonajava.javacore.LclassesAbstratas.test;

import academy.devdojo.maratonajava.javacore.LclassesAbstratas.domain.Desenvolvedor;
import academy.devdojo.maratonajava.javacore.LclassesAbstratas.domain.Funcionario;
import academy.devdojo.maratonajava.javacore.LclassesAbstratas.domain.Gerente;

public class Test {
    public static void main(String[] args) {
        Gerente gerente = new Gerente("Nami", 5000);
        Desenvolvedor desenvolvedor = new Desenvolvedor("Luffy", 3000);
        System.out.println(desenvolvedor);
        System.out.println(gerente);
    }

}
