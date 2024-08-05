import java.util.Scanner;

public class Aula03TiposPrimitivosExercicio {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int cf;

        while (true) {
            executarFormulario(sc);

            System.out.println("Digite 1 para confirmar e 2 para refazer o formulário");
            cf = sc.nextInt();
            sc.nextLine();

            if (cf == 1) {
                System.out.println("Obrigado por concluir o formulário!");
                break;
            } else if (cf == 2) {
                System.out.println("Reiniciando o formulário...");
            } else {
                System.out.println("Opção inválida. Saindo.");
                break;
            }
        }
    }

    private static void executarFormulario(Scanner sc) {
        System.out.println("Olá sou Miguel e gostaria de saber se já recebeu seu salário, se sim responda este questionário abaixo:");

        System.out.println("Qual seu nome?");
        String name = sc.nextLine();

        System.out.println("Qual a sua idade?");
        int idade = sc.nextInt();
        sc.nextLine();

        System.out.println("Qual seu endereço?");
        String endereco = sc.nextLine();

        System.out.println("Quanto recebeu de salário?");
        double salario = sc.nextDouble();
        sc.nextLine();

        System.out.println("Quando recebeu? Digite a data com pontos (EX: 01.02.2024)");
        String data = sc.nextLine();

        System.out.println("Você confirma?");
        System.out.println("Eu " + name + ", tenho " + idade + " anos, morando no endereço " + endereco + ", confirmo que recebi o salário de " + salario + " reais, na data " + data);
    }
}
