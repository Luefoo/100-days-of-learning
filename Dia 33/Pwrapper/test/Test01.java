package academy.devdojo.maratonajava.javacore.Pwrapper.test;

public class Test01 {
    public static void main(String[] args) {
        byte bytep = 1;
        short shortp = 1;
        int intp = 10;
        long longp = 10L;
        float floatp = 10F;
        double doublep = 10D;
        char charp = 'W';
        boolean booleaP = false;

        Byte bytew = 1;
        Short shortw = 1;
        Integer intw = 10; // autoboxing ou boxing
        Long longw = 10L;
        Float floatw = 10F;
        Double doublew = 10D;
        Character charw = 'W';
        Boolean booleaw = false;

        int i = intw; // unboxing
        Integer intw2 = Integer.parseInt("1");
        boolean verdade = Boolean.parseBoolean("True");
        System.out.println(verdade);

        System.out.println(Character.isDigit('A'));
        System.out.println(Character.isDigit('B'));


    }
}
