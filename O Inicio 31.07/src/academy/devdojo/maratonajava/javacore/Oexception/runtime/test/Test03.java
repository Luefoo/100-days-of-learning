package academy.devdojo.maratonajava.javacore.Oexception.runtime.test;

public class Test03 {
    public static void main(String[] args) {

abreConexao();
abreConexao2();
    }
    private static String abreConexao(){
        try{
            System.out.println("Abrindo arquivo");
            System.out.println("Escrevendo dados no arquivo");
            System.out.println("Fechando recurso liberado pelo SO");
            return "conexao abrida";
        }catch (Exception e){
            e.printStackTrace();
        }finally {
            System.out.println("Fechando recurso liberado pelo SO");
        }
        return null;
    }
    private static void abreConexao2(){
        try{
            System.out.println("Abrindo arquivo");
            System.out.println("Escrevendo dados no arquivo");
            System.out.println("Fechando recurso liberado pelo SO");

        }catch (Exception e){
            e.printStackTrace();

        }finally {
            System.out.println("Fechando recurso liberado pelo SO");
        }

    }
}
