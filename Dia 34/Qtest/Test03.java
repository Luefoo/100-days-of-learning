package academy.devdojo.maratonajava.javacore.Qtest;

public class Test03 {
    public static void main(String[] args) {
        long inicio = System.currentTimeMillis();
        concatStringBuilder(30_000);
        long fim = System.currentTimeMillis();
        System.out.println("Tempo gasto para StringBuilder "+ (fim - inicio + "ms"));

        inicio = System.currentTimeMillis();
        concatStringBuffer(30_000);
        fim = System.currentTimeMillis();
        System.out.println("Tempo gasto para StringBuffer "+ (fim - inicio + "ms"));
    }

    private static void concatStringBuilder(int tamanho){
        StringBuilder sb = new StringBuilder(tamanho);
        for (int i = 0; i < tamanho; i++ ){
            sb.append(i);
        }
    }

    private static void concatStringBuffer(int tamanho){
        StringBuilder sb = new StringBuilder(tamanho);
        for (int i = 0; i < tamanho; i++ ){
            sb.append(i);
        }
    }
}
