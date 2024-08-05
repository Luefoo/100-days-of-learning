import java.util.Scanner;

public class Aula02TiposPrimitivos {
    public static void main(String[] args) {
        //int, double, float, char, bYte, short, long, boolean
        Scanner sc = new Scanner(System.in);
        int age = (int) 10000000000L;
        double salarioDouble = 2000;
        float salarioFloat = 2500;
        byte idadeByte = 10; //-128 a 127
        long numeroGrande = 10000;
        short idadeShort = 10;
        boolean verdadeiro = true;
        boolean falso = false;
        char caractere = 10;
        String nome = "Miguel";

        System.out.println(age);
        System.out.println("age");
        System.out.println("A idade é: " + age);
        System.out.println("A idade é: " + age + "anos");
        System.out.println(falso);
        System.out.println(numeroGrande);
        System.out.println("Olá meu nome é" + nome);
    }
    }