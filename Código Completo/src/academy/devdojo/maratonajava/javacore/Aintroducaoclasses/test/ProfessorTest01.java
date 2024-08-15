package academy.devdojo.maratonajava.javacore.Aintroducaoclasses.test;

import academy.devdojo.maratonajava.javacore.Aintroducaoclasses.dominio.Professor;

public class ProfessorTest01 {
    public static void main(String[] args) {
        Professor prof = new Professor();
        prof.nome = "Mestre Kami";
        prof.idade = 140;
        prof.sexo = 'M';

        System.out.println(" Nome: " + prof.nome + " Idade: "+prof.idade + " Sexo: "+ prof.sexo);
    }
}
