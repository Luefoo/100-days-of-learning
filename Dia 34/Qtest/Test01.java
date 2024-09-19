package academy.devdojo.maratonajava.javacore.Qtest;

public class Test01 {
    public static void main(String[] args) {
         String nome = "William";
         String nome2 = "bababoi";
         nome = nome.concat(" Suane");
        System.out.println(nome);
        System.out.println(nome == nome2);
        String nome3 = new String("William"); // 1 variavel de referencia, 2 objeto do tipo string, 3 uma string no pool de string
        System.out.println(nome2 == nome3);
        System.out.println(nome2 == nome3.intern());
    }
}
