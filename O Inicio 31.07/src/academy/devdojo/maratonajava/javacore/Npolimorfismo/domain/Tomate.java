package academy.devdojo.maratonajava.javacore.Npolimorfismo.domain;

public class Tomate extends Produto {
    public static final double IMPOSTO_POR_CENTO = 0.06;
    private String validade;

    public String getValidade() {
        return validade;
    }

    public void setValidade(String validade) {
        this.validade = validade;
    }



    public Tomate(String nome, double valor) {
        super(nome, valor);
    }

    @Override
    public double calcularImposto() {
        System.out.println("Calculando imposto do tomate");
        return this.valor * IMPOSTO_POR_CENTO;
    }
}
