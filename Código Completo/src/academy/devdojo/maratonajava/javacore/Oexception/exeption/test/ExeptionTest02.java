package academy.devdojo.maratonajava.javacore.Oexception.exeption.test;

import java.io.File;
import java.io.IOException;

public class ExeptionTest02 {
    public static void main(String[] args) throws IOException{
      criarNovoArquivo();
    }

    private static void  criarNovoArquivo() throws IOException {
        File file = new File("a\\teste.txt");
        try{
            boolean isCriado = file.createNewFile();
            System.out.println("Arquivo criado " +isCriado);
        }catch (IOException e){
          e.printStackTrace();
          //throw e;
            throw new RuntimeException("Problema na hora de criar o arquivo.");
        }

    }
}
