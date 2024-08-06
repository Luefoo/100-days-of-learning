import java.util.Scanner;

public class Aula06ExSwitch2 {
    public static void main(String[] args) {

        //Dados os valores de 1 a 7 imprima se é dia útil ou fim de semana! Considerando Domingo como 1 e Sábado como 7

        Scanner sc = new Scanner(System.in);
        int dia;

        System.out.println("Digite um número relacionado á um dia da semana (1 a 7): ");
        dia = sc.nextInt();

        switch (dia) {
            case 1:
                System.out.println("Fim de semana!");
                break;

            case 2:
                System.out.println("Dia útil");
                break;

            case 3:
                System.out.println("Dia útil");
                break;


            case 4:
                System.out.println("Dia útil");
                break;


            case 5:
                System.out.println("Dia útil");
                break;


            case 6:
                System.out.println("Dia útil");
                break;


            case 7:
                System.out.println("Fim de semana!");
                break;

            default:
                System.out.println("Não é um número válido referente aos dias da semana");
                break;
        }
    }
}
