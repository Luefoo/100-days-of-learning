package academy.devdojo.maratonajava.javacore.Aintroducaoclasses.test;

import academy.devdojo.maratonajava.javacore.Aintroducaoclasses.dominio.Carro;

public class CarroTest01 {
    public static void main(String[] args) {
        Carro carro1 = new Carro();
        Carro carro2 = new Carro();

        carro1.nome = "Buggati Chiron";
        carro1.modelo = "Sport";
        carro1.ano = 2023;

        carro2.nome = "Lamborguini Veneno";
        carro2.modelo = "Sport";
        carro2.ano = 2024;

        System.out.println(" Nome: " + carro1.nome + " Modelo: "+carro1.modelo + " Ano: "+ carro1.ano);
        System.out.println(" Nome: " + carro2.nome + " Modelo: "+carro2.modelo + " Ano: "+ carro2.ano);
    }
}
