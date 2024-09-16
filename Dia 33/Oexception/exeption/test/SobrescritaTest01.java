package academy.devdojo.maratonajava.javacore.Oexception.exeption.test;

import academy.devdojo.maratonajava.javacore.Oexception.exeption.LoginInvalido;

import java.io.FileNotFoundException;

public class SobrescritaTest01 {
    public static void main(String[] args) {
        Pessoa pessoa = new Pessoa();
        Funcionario funcionario = new Funcionario();

        try {
            pessoa.salvar();
        } catch (LoginInvalido e) {
            throw new RuntimeException(e);
        } catch (FileNotFoundException e) {
            throw new RuntimeException(e);
        }
        try {
            funcionario.salvar();
        } catch (LoginInvalido e) {
            throw new RuntimeException(e);
        }
    }
}
