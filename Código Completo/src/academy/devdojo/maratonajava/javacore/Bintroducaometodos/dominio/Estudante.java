package academy.devdojo.maratonajava.javacore.Bintroducaometodos.dominio;

public class Estudante {
    public String nome;
    public int idade;
    public char sexo;

    public void imprime(){
        System.out.println("------------------------");
        System.out.println(nome); //this. é pra usar a variavel de classe
        System.out.println(idade);
        System.out.println(sexo);

    }
}
