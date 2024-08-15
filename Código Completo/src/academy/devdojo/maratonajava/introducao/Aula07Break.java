package academy.devdojo.maratonajava.introducao;

public class Aula07Break {
    public static void main(String[] args) {
        //imprima os primeiros 25 numeros de um valor dado. Por exemplo 50

        int vMax = 50;
        for (int i = 0; i <= vMax ; i++) {
            if (i > 25) {
                break;
            }

            System.out.println(i);

        }
    }
}
