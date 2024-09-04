package academy.devdojo.maratonajava.javacore.Npolimorfismo.servico;

import academy.devdojo.maratonajava.javacore.Npolimorfismo.domain.Computador;
import academy.devdojo.maratonajava.javacore.Npolimorfismo.domain.Produto;
import academy.devdojo.maratonajava.javacore.Npolimorfismo.domain.Tomate;

public class CalculadoraImposto {
   // public static void calcularImpostoComputador(Computador computador){
      //  System.out.println("Relatório de imposto do computador");
       // double imposto = computador.calcularImposto();

      //  System.out.println("Imposto do computador"+ computador.getNome());
       // System.out.println("Valor "+ computador.getValor());
       // System.out.println("Imposto a ser pago"+ imposto);


 //   }

    //public static void calcularImpostoTomate(Tomate tomate){
     //   System.out.println("Relatório de imposto do tomate");
      //  double imposto = tomate.calcularImposto();

      //  System.out.println("Imposto do tomate"+ tomate.getNome());
     //   System.out.println("Valor "+ tomate.getValor());
    //    System.out.println("Imposto a ser pago"+ imposto);


   // }

    public static void calcularImposto(Produto produto){
        System.out.println("Relatório de imposto");
        double imposto = produto.calcularImposto();
        System.out.println("Produto: "+produto.getNome());
        System.out.println("Valor: "+produto.getValor());
        System.out.println("Imposto a ser pago: "+ imposto);

        if (produto instanceof Tomate){

        Tomate tomate = (Tomate) produto;
            System.out.println(((Tomate) produto).getValidade());
        }
    }
}
