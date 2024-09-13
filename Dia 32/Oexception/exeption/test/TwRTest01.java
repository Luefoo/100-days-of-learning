package academy.devdojo.maratonajava.javacore.Oexception.exeption.test;

import java.io.*;

public class TwRTest01 {
    public static void main(String[] args) {

    }

    public static void lerArquivo(){
        Reader reader = null;
        try {
            reader = new BufferedReader(new FileReader("Text"));

        }catch (FileNotFoundException e){
            e.printStackTrace();
        }finally {
            try {
                reader.close();
            }    catch (IOException exception){
                    exception.printStackTrace();
                }
            }

        }

    }


