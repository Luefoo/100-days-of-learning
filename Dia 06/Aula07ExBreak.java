public class Aula07ExBreak {
    public static void main(String[] args) {
        // Dado o valor de um carro, descubra em quantas vezes ele pode ser parcelado. Valor da parcela >= a 1000

    double vTotal = 30000;

        for (int parcela = 1; parcela <= vTotal ; parcela++) {
            double vParcela = vTotal / parcela;
            if (vParcela < 1000){
                break; //se usasse "continue" aqui ele ignoraria tudo que está abaixo e continuaria executando
            }
            System.out.println("Parcela " + parcela+ " R$ "+vParcela);
        }

    }
}
