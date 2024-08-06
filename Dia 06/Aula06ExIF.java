public class Aula06ExIF {
    public static void main(String[] args) {
        double salarioA = 70000;
        double pF = 9.70 / 100;
        double sF = 37.35 / 100;
        double tF = 49.50 / 100;
        double vImposto;

        if (salarioA <= 34712){
            vImposto = salarioA * pF;
        } else if (salarioA >= 34713 && salarioA <= 68507) {
            vImposto = salarioA * sF;
            
        }else {
            vImposto = salarioA * tF;
        }

        System.out.println(vImposto);
    }
}
