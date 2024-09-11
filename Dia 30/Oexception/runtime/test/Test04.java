package academy.devdojo.maratonajava.javacore.Oexception.runtime.test;

import java.io.FileNotFoundException;
import java.sql.SQLException;

public class Test04 {
    public static void main(String[] args) {
        try {
            System.out.println("Fora");
        } catch (IndexOutOfBoundsException e) {
            System.out.println("Dentro");
        } catch (ArrayIndexOutOfBoundsException) {
            System.out.println("Dentro");
        }

        try{
            talvez();
        }catch (SQLException throwables){
            throwables.printStackTrace();
        }catch (FileNotFoundException e){
            e.printStackTrace();
        }
    }
private static void talvez() throws SQLException, FileNotFoundException{

}

}
