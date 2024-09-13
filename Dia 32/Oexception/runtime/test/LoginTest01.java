package academy.devdojo.maratonajava.javacore.Oexception.runtime.test;

import academy.devdojo.maratonajava.javacore.Oexception.exeption.LoginInvalido;

import java.util.Scanner;

public class LoginTest01 {
    public static void main(String[] args) {
        try {
            logar();
        } catch (LoginInvalido e) {
            throw new RuntimeException(e);
        }
    }

    private static void logar() throws LoginInvalido{
        Scanner sc = new Scanner(System.in);
        String usernameDB = "Goku";
        String senhaDB = "SSJ";
        System.out.println("Usuario");
        String usernamedigitado = sc.nextLine();
        System.out.println("Senha");
        String senhadigitada = sc.nextLine();
        if(!usernameDB.equals(usernamedigitado) || !senhaDB.equals(senhadigitada)){
            throw new LoginInvalido("Usuario ou senha invalidos");
        }

        System.out.println("Usuario logado com sucesso");
    }
}
