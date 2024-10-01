package academy.devdojo.maratonajava.javacore.Qtest;

public class Stringbuildtest01
{
    public static void main(String[] args) {
        String nome = "William";
        nome.concat("   DevDojo");
        nome.substring(0,3);
        System.out.println(nome);
        StringBuilder sb = new StringBuilder("William");
        sb.append(" Dev Dojo").append(" Academy");
        sb.reverse();
        sb.delete(0,3);
        System.out.println(sb);
    }
}
