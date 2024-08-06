import java.util.Scanner;

public class Aula06ExSwitch {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        int dia;

        System.out.println("Digite (1 a 7) o dia de hoje: ");
        dia = sc.nextInt();

        switch (dia) {
            case 1:
                System.out.println("Dom");
            break;
            case 2:
                System.out.println("Seg");
                break;
            case 3:
                System.out.println("Ter");
                break;
            case 4:
                System.out.println("Qua");
                break;
            case 5:
                System.out.println("Qui");
                break;
            case 6:
                System.out.println("Sex");
                break;
            case 7:
                System.out.println("Sab");
                break;

            default:
                System.out.println("Esse número é inválido");
                break;
        }
    }
}
