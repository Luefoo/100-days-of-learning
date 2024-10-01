package academy.devdojo.maratonajava.javacore.Bintroducaometodos.dominio;

public class Calculadora {

    public void somaDoisNumeros(){
        System.out.println(10 + 10);
    }

    public void subtraiDoisNumeros(){
        System.out.println(21 - 2);
    }

    public void multiplicaDoisNumeros(int num1, int num2){
        System.out.println(num1 * num2);

    }

    public double divideDoisNumeros(double num1, double num2){

        if (num2 == 0){
            return 0;
        }
        return (int) (num1/num2);
    }

    public double divideDoisNumeros02(double num1, double num2) {

        if (num2 == 0) {
            return 0;
        } else {
            return (int) (num1 / num2);
        }
    }

    public double divideDoisNumeros03(double num1, double num2) {

        if (num2 != 0) {
            return num1/num2;
        } else {
            return 0;
        }
    }

    public void imprimeDivisaoDoisNumeros(double num1, double num2){
        if (num2 == 0){
            System.out.println("Toda divisao por 0 e = 0");
        }else {
            System.out.println(num1/num2);
        }

    }
 public void somaArray(int[] numeros){
        int soma = 0;

     for (int num: numeros) {
         soma = soma + 1;

     }
     System.out.println(soma);
 }
 public void somaVarArgs(int... numeros){
     int soma = 0;

     for (int num: numeros) {
         soma = soma + 1;

     }
     System.out.println(soma);
 }
}
