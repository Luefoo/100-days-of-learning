package academy.devdojo.maratonajava.javacore.Hheranca.dominio;

public class Funcionario extends Pessoa {
    private double salario;

    static{
        System.out.println("dentro do init static Funcionario");
    }

    {
        System.out.println("bloco de init Funcionario1");
    }

    {
        System.out.println("bloco de init Funcionario2");
    }


    public Funcionario(String nome) {
         super(nome);
        System.out.println("construtor funcionario");

    }

    public void imprime() {
        super.imprime();
        System.out.println(this.salario);

    }

    public void relatorioPagamento() {
        System.out.println("Eu " + this.nome + " recebi o salário de " + this.salario);
    }

    public double getSalario() {
        return salario;
    }

    public void setSalario(double salario) {
        this.salario = salario;
    }
}
