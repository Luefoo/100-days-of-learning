package academy.devdojo.maratonajava.javacore.Jmodificadorfinal.domain;

public class Carro {
    private String nome;
    public static final double VEL_LIMIT = 250;
    public final Comprador COMPRADOR = new Comprador();

    public final void imprime(){
        System.out.println(this.nome);
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }


}
