package academy.devdojo.maratonajava.javacore.Oexception.exeption.test;

import academy.devdojo.maratonajava.javacore.Oexception.exeption.LoginInvalido;

import java.io.FileNotFoundException;

public class Pessoa {

    public void salvar() throws LoginInvalido, FileNotFoundException {
        System.out.println("Salvando Pessoa");
    }
}
