package academy.devdojo.maratonajava.javacore.Kenum.dominio;

public enum TipoPagamento{
    DEBITO{
        @Override
        public double calcularDesc(double valor) {
            return valor * 0.1;
        }
    }, CREDITO{
        @Override
        public double calcularDesc(double valor) {
            return valor * 0.05;
        }
    };

public double calcularDesc(double valor){
        return 0;
}


}