package academy.devdojo.maratonajava.javacore.LclassesAbstratas.domain;

public class Gerente extends Funcionario{

    public Gerente(String nome, double salario) {
        super(nome, salario);

    }

    @Override
    public String toString() {
        return "Test{" +
                "nome='" + nome + '\'' +
                ", salario=" + salario +
                '}';
    }

}
