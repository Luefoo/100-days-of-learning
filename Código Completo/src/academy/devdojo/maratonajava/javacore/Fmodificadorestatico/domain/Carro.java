package academy.devdojo.maratonajava.javacore.Fmodificadorestatico.domain;

public class Carro {
    private String nome;
    private double velMax;
    private static double velLimit = 250;

    public Carro(String nome, double velMax){
        this.nome = nome;
        this.velMax = velMax;
    }
    public void imprime(){
        System.out.println(" -----------");
        System.out.println("Nome " +nome);
        System.out.println("Velocidade Máxima " +velMax);
        System.out.println("Velocidade Limite " +velLimit);
    }

    public static void setvelLimit(double velLimit){
        Carro.velLimit = velLimit;
    }

    private static double getvelLimit(){
     return Carro.velLimit;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public double getVelMax() {
        return velMax;
    }

    public void setVelMax(double velMax) {
        this.velMax = velMax;
    }

    public double getVelLimit() {
        return velLimit;
    }

    public void setVelLimit(double velLimit) {
        this.velLimit = velLimit;
    }
}
