package academy.devdojo.maratonajava.javacore.Oexception.exeption;

public class LoginInvalido extends Exception{

    public LoginInvalido(){
        super("login invalido");
    }

    public LoginInvalido(String message){
        super(message);
    }
}
