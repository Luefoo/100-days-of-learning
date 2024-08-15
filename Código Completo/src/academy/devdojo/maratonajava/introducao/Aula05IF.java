package academy.devdojo.maratonajava.introducao;

import java.util.Scanner;

public class Aula05IF {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int id;

        System.out.println("Qual sua idade?");
        id = sc.nextInt();

        if (id >= 18){
            System.out.println("Você é maior de idade");
        } else if (id > 0 || id < 18) {
            System.out.println("Você é menor de idade");
            
        }else {
            System.out.println("Essa idade não existe");
        }

        double salario = 6000;
        String mensagemD = "Eu vou doar 500";
        String mensagemDoar = "Eu não voudoar";
        //(condicao) ? verdadeiro: falso
        String resultado = salario > 5000 ? mensagemD : mensagemDoar;
        System.out.println(resultado);
    }
}
